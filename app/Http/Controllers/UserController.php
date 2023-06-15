<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function register(Request $request)
    {
        //status
        //501 = email sudah terdaftar
        //1 = berhasil daftar
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'nama' => ['required'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }

        $email = $request->email;
        //cek email 
        $data = User::where('email', $email)->first();

        if ($data != null) {
            $response = [
                'message' => 'Email sudah terdaftar',
                'status' => 501
            ];

            return response()->json($response, 200);
        }


        $user = User::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => Hash::make($request->password)
        ]);


        $response = [
            'message' => 'Daftar user berhasil',
            'status' => 1,
            'data' => $user
        ];

        return response()->json($response, 200);
    }

    public function login(Request $request)
    {
        //status
        //0 = belum terdaftar
        //1 = berhasil login pekerja
        //10 = berhasil login admin
        //2 = password salah
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }
        $email = $request->email;
        $password = $request->password;
        //cek user
        $ceklogin = User::where('email', $email)->first();
        if ($ceklogin != null) {
            $password = Hash::check($password, $ceklogin['password']);
            if ($password == true) {
                //CEK ROLE
                if ($ceklogin->role == 1) {
                    $response = [
                        'message' => 'login sebagai pekerja',
                        'status' => 1,
                        'data' => $ceklogin
                    ];
                    return response()->json($response, Response::HTTP_OK);

                } else if ($ceklogin->role == 0) {
                    $response = [
                        'message' => 'login sebagai admin',
                        'status' => 1,
                        'data' => $ceklogin
                    ];
                    return response()->json($response, Response::HTTP_OK);

                }
            }else {
            //jiika salah
            $response = [
                'message' => 'Password salah',
                'status' => 2,
                'data' => null
            ];

            return response()->json($response, Response::HTTP_OK);

            }
        } else {
            $response = [
                'message' => 'Belum terdaftar',
                'status' => 0,
                'data' => null
            ];

            return response()->json($response, Response::HTTP_OK);
        }
    }

    public function profil(Request $request)
    {
        $user = User::where('id', $request->input('id'))->first();
        $response = [
            'message' => 'Data Profil',
            'status' => 1,
            'data' => $user
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
