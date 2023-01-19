<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;
use App\Models\Mengatur;

class HomeController extends Controller
{
    function index (){
    $data = [
        'about' => About::get(),
        // 'mengatur' => Mengatur::limit(3)->get(),
        'mengatur' => Mengatur::paginate(3),


        'content'=> 'home/home/index'
    ];
    return view('home.layouts.wrapper',$data);
    }
}