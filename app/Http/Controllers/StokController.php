<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\List_;

class StokController extends Controller
{
    public function list()
    {
        $hasil = DB::select('select * from stock');
        return view('list-stok', ['data' => $hasil]);
    }
    public function simpan(Request $req)
    {
        DB::insert(
            'insert into stock (merk,tipe, harga) values (?, ?, ?)',
            [$req->merk, $req->tipe, $req->harga]
        );
        $hasil = DB::select('select * from stock');
        return view('list-stok', ['data' => $hasil]);
    }
}
