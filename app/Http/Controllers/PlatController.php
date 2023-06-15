<?php

namespace App\Http\Controllers;

use App\Exports\PlatDataExport;
use App\Models\CheckPlat;
use App\Models\Plat;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\HttpFoundation\Response;

class PlatController extends Controller
{
    public function index(Request $request)
    {
        $data = Plat::orderBy('status', 'DESC')
            ->with(['checkplat' => function ($query) {
                $query->whereDate('created_at', Carbon::today());
            }])
            ->orderBy('created_at', 'DESC')->get();
        $response = [
            'message' => 'Data Plat',
            'status' => 1,
            'data' => $data
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    public function detailplat(Request $request)
    {
        $data = Plat::where('id',$request->input('id'))->first();
        if ($data!=null) {
            $response = [
                'message' => 'Data Plat',
                'status' => 1,
                'data' => $data
            ];
            return response()->json($response, Response::HTTP_OK);
        }else {
            $response = [
                'message' => 'Data Plat',
                'status' => 0,
                'data' => $data
            ];
            return response()->json($response, Response::HTTP_OK);
        }

    }

    function getabsensi(Request $request)
    {
        $data = Plat::orderBy('status', 'DESC')
            ->with(['checkplat' => function ($query) {
                
            }])
            ->orderBy('created_at', 'DESC')->get();

      $response = [
            'message' => 'Data absen',
            'status' => 1,
            'data' => $data
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'aktivitas' => ['required'],
            'berat' => ['required'],
            't_start' => ['required'],
            't_finish' => ['required']
        ]);

        $upload_data = $request->all();


        $insert = Plat::create($upload_data);

        $response = [
            'message' => 'berhasil insert',
            'status' => 1
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function update(Request $request)
    {
        $update = $request->except(['id']);

        $update = Plat::where('id', $request->id)->update($update);

        $response = [
            'message' => 'update berhasil',
            'status' => 1
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function delete(Request $request)
    {
        $hapus = Plat::where('id', $request->id)->delete();
        $response = [
            'message' => 'hapus berhasil',
            'status' => 1
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function qrcode(Request $request)
    {
        $qrcode = base64_encode(QrCode::format('png')->size(260)->errorCorrection('H')->generate($request->id));

        $pdf = Pdf::loadView(
            'qrcode.qrcode',
            [
                'id' => $request->id
            ],
            compact('qrcode')
        )->setPaper([0, 0, 150, 180], 'potrait');

        $content = $pdf->download()->getOriginalContent();
        Storage::put("public/csv/qrcode/qrcode-$request->id.pdf", $content);
        $response = [
            'message' => 'sudah seawater hari ini',
            'status' => 1,
            'data' => url('/') . "/storage/csv/qrcode/qrcode-$request->id.pdf"
        ];
        return response()->json($response, 200);
    }

    function exportexcel(Request $request)
    {
        
        $export = Excel::store(new PlatDataExport, 'public/platdata.xlsx');
        
        // $tanggal = Plat::whereMonth('created_at',Carbon::now())
        //     ->with(['checkplat' => function ($query) {
        //         $query->orderBy('created_at', 'asc');
        //     }])
        //     ->get();
        // $out = [];
        // $range = range(1, Carbon::now()->daysInMonth);
        // foreach ($tanggal as $key => $tgl) {
        //     $out[] = $tgl;
        //     $checkPlat = $tgl->checkplat;
        //     $dateCheck = collect($checkPlat)->pluck('created_at')->all();
        //     $dateCheck = collect($checkPlat)->map(function ($item) {
        //         return date('d', strtotime($item));
        //     })->all();
        //     $plats = [];
        //     for ($a = 1; $a < (count($range) + 1); $a++) {
        //         $plats[$a] = 'putih';

        //         foreach ($checkPlat as $cp) {
        //             $date = date('d', strtotime($cp->created_at));
        //             if (isset($range[$a])) {
        //                 if ($date == $a) {
        //                     $status = collect($checkPlat)->filter(function ($i) use ($a) {
        //                         $selectedDate = date('d', strtotime($i->created_at));
        //                         return $selectedDate == $a;
        //                     })->values()->toArray();
        //                     $plats[$a] = $status[0]['status'];
        //                 }
        //             }
        //         }
        //     }
        //     if (count($checkPlat) > 0) {
        //     }

        //     $out[$key]['check'] = $plats;
        // }
        $response = [
            'message' => 'sudah seawater hari ini',
            'status' => 1,
            // 'data' => $out,
            'data' => url('/') . "/storage/platdata.xlsx"
        ];
        return response()->json($response, 200);
    }
}
