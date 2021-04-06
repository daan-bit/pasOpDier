<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfielController extends Controller
{
    public function show($id){   
        return view('profiel.show',[
            'oppasser' => \App\Models\User::find($id),
        ]);
    }
}