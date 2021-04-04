<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Auth;
class HuisdierController extends Controller
{
    public function index(){
        $beschikbaarHuisdier = \App\Models\Huisdier::all()->where('status', '=', 'open');
        return view('huisdier.index', [
            'huisdier' => $beschikbaarHuisdier,        
        ]);
    }

    public function show($id){   
        return view('huisdier.show',[
            'eigenaar' => \App\Models\Huisdier::find($id)->huisdierEigenaar,
            'huisdier' => \App\Models\Huisdier::find($id),
        ]);        
    }

    public function create(){
        return view('huisdier.create', [
            'gebruiker' => Auth::user(),
            'afbeeldingen' => \App\Models\Image::all(),
            'soorten' => \App\Models\Soort::all(),
            'huisdier' => \App\Models\Huisdier::all(),
            ]);
    }

    public function store(Request $request, \App\Models\Huisdier $huisdier){
        $huisdier->naam = $request->input('naam');
        $huisdier->soort = $request->input('soort');
        $huisdier->wanneer = $request->input('wanneer');
        $huisdier->uurtarief = $request->input('uurtarief');
        $huisdier->hoelang = $request->input('hoelang');
        $huisdier->user_id = Auth::user()->id;
        $huisdier->beschrijving = $request->input('beschrijving');

        try{
            $huisdier->save();
            return redirect('/');
        }catch(Exception $e){
            return redirect('/create');
        }
    }
}
