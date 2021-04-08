<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'gebruiker' => \App\Models\User::all()->where('role', '!=', 'Ongewenst'),
            'huisdier' => \App\Models\Huisdier::all(),
        ]);
    }

    
}
