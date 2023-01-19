<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class HomeInfoController extends Controller
{
    function index (){
    $data = [
        'informasi' => Informasi::get(),
        'content'=> 'home/informasi/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

    public function detail ($id)
    {
    $data = [
        'informasi' => Informasi::find($id),
        'content'=> 'home/informasi/detail'
    ];
    return view('home.layouts.wrapper',$data);
    }
}
