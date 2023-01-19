<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use RealRashid\SweetAlert\Facades\Alert;

class AdminTentangController extends Controller
{

    public function index()
    {
        $data =[
            'title' => 'Manajemen Tentang',
            'tentang' => Tentang::first(),
            'content' => 'admin/tentang/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }

    public function update(Request $request)
    {   
        $tentang = Tentang::first();
         $data = $request -> validate ([
            'nama' => 'required',
            'deskripsi' => 'required ',

        ]);

        // upload gambar
    if ($request -> hasFile('gambar')) {
            if($tentang->gambar  != SQL_NULLABLE){
                unlink($tentang->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/tentang/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = $request ->gambar;
        }
            // $data['password'] = Hash::make($data ['password']);
                    $tentang->update($data);
                    return redirect ('/admin/tentang');
                Alert::alert('Sukses', 'Data Berhasil Ditambah');


    }
}


