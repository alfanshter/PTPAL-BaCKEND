<?php

namespace App\Http\Controllers;

use App\Models\CheckPlat;
use App\Models\Plat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\Response;

class CheckPlatController extends Controller
{

    public function checkplat(Request $request)
    {
        //cek

        $cekplat = CheckPlat::where('id_plat', $request->id_plat)
            ->whereDate('created_at', Carbon::today())->first();
        if ($cekplat != null) {
            $response = [
                'message' => 'plat sudah di check',
                'status' => 0
            ];

            return response()->json($response, Response::HTTP_CREATED);
        } else {
            $update = [
                'm_lalu' => $request->m_lalu,
                'm_skr' => $request->m_skr,
                'sisa' => $request->sisa,
                'keterangan' => $request->keterangan,
                'user_edit' => $request->nama,
                'status' => 1,
            ];

            $update = Plat::where('id', $request->id_plat)->update($update);

            //tambah absen
            $upload_data = [
                'id_plat' => $request->id_plat,
                'nama' => $request->nama,
                'status' => $request->status
            ];

            $insert = CheckPlat::create($upload_data);
            $response = [
                'message' => 'update berhasil',
                'status' => 1
            ];

            return response()->json($response, Response::HTTP_CREATED);
        }
    }
}
