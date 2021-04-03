<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuisdierController extends Controller
{
    public function index(){
        return view('huisdier.index', [
            'huisdier' => \App\Models\Huisdier::all(),        
        ]);
    }

    public function show($id){        
        return view('huisdier.show',[
            'huisdier' => \App\Models\Huisdier::find($id),
        ]);        
    }
}
