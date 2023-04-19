<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $dataUser = [
            [
                'nama' => 'Asep Jaenudin Sutarji',
                'umur' => '23 Tahun',
                'jabatan' => 'Junior Laravel Developer'
            ],
            [
                'nama' => 'Rahmawati Sutarji',
                'umur' => '18 Tahun',
                'jabatan' => 'Akuntan'
            ]
        ];

        return view('users.index', ['dataUser' => $dataUser]);
    }

    public function show($user){
        return view('users.show', ['user' => $user]);
    }
}
