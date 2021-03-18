<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function save(Request $data)
    {
        return view('bio', [
            'nim' => $data['nim'],
            'nama' => $data['kelas'],
            'kelas' => $data['kelas'],
        ]);
    }
}
