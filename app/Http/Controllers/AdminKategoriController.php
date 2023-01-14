<?php

namespace App\Http\Controllers;


use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Kategori',
            'kategori' => Kategori::get(),
            'content' => 'admin/kategori/index'
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
            'title' => 'Tambah Kategori',
            'content' => 'admin/kategori/add'
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
            'name' => 'required',

        ]);

                    Alert::alert('Sukses', 'Data Berhasil Ditambah');
                    Kategori::create ($data);
                    return redirect ('/admin/kategori');

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
            'title' => 'Edit Kategori',
            'kategori' => Kategori::find ($id),
            'content' => 'admin/kategori/add'
        ];
        return view ('admin.layouts.wrapper', $data ); 
        Alert::alert('Sukses', 'Data Berhasil Di Update');

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
        $kategori = Kategori::find($id);
         $data = $request -> validate ([
            'name' => 'required',
        ]);



                    $kategori->update($data);
                    return redirect ('/admin/kategori');
                    Alert::alert('Sukses', 'Data Berhasil Di Update');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find ($id);


        $kategori->delete();
        Alert::alert('Sukses', 'Data Berhasil Dihapus');
        return redirect ('/admin/kategori');

    }
}
