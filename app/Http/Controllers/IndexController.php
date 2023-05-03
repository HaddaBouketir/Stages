<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compan;
class IndexController extends Controller

 {


    public function index()
    {
       
        $compans = Compan::all();
        return view('compans.index',compact ('compans'));

    }



    
 }
