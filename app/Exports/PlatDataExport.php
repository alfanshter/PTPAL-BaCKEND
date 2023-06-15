<?php

namespace App\Exports;

use App\Models\CheckPlat;
use App\Models\Plat;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PlatDataExport implements FromView, ShouldAutoSize, WithStyles
{
    use Exportable;

    public function view(): View
    {
        $tanggal = Plat::whereMonth('created_at', Carbon::now())
            ->with(['checkplat' => function ($query) {
                $query->orderBy('created_at', 'asc');
            }])
            ->get();
        $out = [];
        $range = range(1, Carbon::now()->daysInMonth);
        foreach ($tanggal as $key => $tgl) {
            $out[] = $tgl;
            $checkPlat = $tgl->checkplat;
            $plats = [];
            for ($a = 1; $a < (count($range) + 1); $a++) {
                $plats[$a] = 'putih';

                foreach ($checkPlat as $cp) {
                    $date = date('d', strtotime($cp->created_at));
                    if (isset($range[$a])) {
                        if ($date == $a) {
                            $status = collect($checkPlat)->filter(function ($i) use ($a) {
                                $selectedDate = date('d', strtotime($i->created_at));
                                return $selectedDate == $a;
                            })->values()->toArray();
                            $plats[$a] = $status[0]['status'];
                        }
                    }
                }
            }

            $out[$key]['check'] = $plats;
        }


        return view('excel.platdata', [
            'data' => $out,
            'bulan' => Carbon::now()->format('M') . '-' . Carbon::now()->format('Y'),
            'rangetanggal' => Carbon::now()->daysInMonth,
        ]);
    }

    public function styles(Worksheet $sheet)
    {

        $styleHeader = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin',
                    'color' => ['rgb' => '808080']
                ],
            ]
        ];
        $sheet->getStyle("A1:AM11")->applyFromArray($styleHeader);
    }
}
