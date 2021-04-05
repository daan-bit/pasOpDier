<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create($id){
        return view('review.create', [
            'eigenaar' => Auth::user(),
            'huisdier' => \App\Models\Review::find($id)->infoHuisdier,
            'order' => \App\Models\Review::find($id)->infoOrder,
            ]);
    }

    public function store(Request $request, \App\Models\Review $review){
        $review->review = $request->input('review');
        $review->user_id = Auth::user()->id;
        $review->huisdier_id = $request->input('huisdier_id');
        $review->order_id = $request->input('order_id');

        try{
            $review->save();
            return redirect('/');
        }catch(Exception $e){
            return redirect('/reviews/{id}/create');
        }
    }

}
