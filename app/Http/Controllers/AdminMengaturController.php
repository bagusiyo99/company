<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mengatur;
use RealRashid\SweetAlert\Facades\Alert;

class AdminMengaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Mengatur',
            'mengatur' => Mengatur::get(),
            'content' => 'admin/mengatur/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =[
            'title' => 'Tambah Mengatur',
            'content' => 'admin/mengatur/add'
        ];
        
        return view ('admin.layouts.wrapper', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            // 'icon' => 'required',
            'gambar' => 'required',
        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/mengatur/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

                    Alert::alert('Sukses', 'Data Berhasil Ditambah');
                    Mengatur::create ($data);
                    return redirect ('/admin/mengatur');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =[
            'title' => 'Edit Mengatur',
            'mengatur' => Mengatur::find ($id),
            'content' => 'admin/mengatur/add'
        ];
        return view ('admin.layouts.wrapper', $data ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $mengatur = Mengatur::find($id);
         $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            // 'icon' => 'required',
            // 'gambar' => 'required',
            // 'urutan' => 'required',
            // 'gambar' => 'required',
        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            if($mengatur->gambar  != null){
                unlink($mengatur->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/mengatur/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = $mengatur ->gambar;
        }

            // $data['password'] = Hash::make($data ['password']);
                    $mengatur->update($data);
                    return redirect ('/admin/mengatur');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mengatur = Mengatur::find ($id);

            if($mengatur->gambar != null){
            unlink($mengatur->gambar);
                }

        $mengatur->delete();
        Alert::alert('Sukses', 'Data Berhasil Dihapus');
        return redirect ('/admin/mengatur');

    }
}
