<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen User',
            'user' => User::get(),
            'content' => 'admin/user/index'
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
            'title' => 'Tambah User',
            'content' => 'admin/user/add'
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
            'email' => 'required |unique:users',
            'password' => 'required',
        ]);

            // $data['password'] = Hash::make($data ['password']);
                    Alert::alert('Sukses', 'Data Berhasil Ditambah');
                    User::create ($data);
                    return redirect ('/admin/user');

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
            'title' => 'Edit User',
            'user' => User::find ($id),
            'content' => 'admin/user/add'
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
        $user = User::find ($id);
        $data = $request -> validate ([
            'name' => 'required',
            'email' => 'required |unique:users, email,' .$user->id,
            // 'password' => 'required',
        ]);

            // $data['password'] = Hash::make($data ['password']);
                    $user->update($data);
                    return redirect ('/admin/user');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find ($id);
        $user->delete();
        Alert::alert('Sukses', 'Data Berhasil Dihapus');

        return redirect ('/admin/user');

    }
}
