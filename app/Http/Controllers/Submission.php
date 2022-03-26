<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Submission extends Controller
{
   public  function addition(Request $req)
    {
        $req->validate([
            'firstnumber'=>'required',
            'secondnumber'=>'required',
            ]);

        $first = $req->input('firstnumber');
        $second = $req->input('secondnumber');
        $result = $first+$second;
        return view('add', ['result' => $result,'firstno'=>$first,'secondno'=>$second]);
    }
}
