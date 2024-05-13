<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Train::all());
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function next()
    {
        //dd(Train::all());
        $trains = Train::where('departure_date', '>=', date('Y-m-d'))->get();
        return view('next', compact('trains'));
    }

    public function singleTrain($id)
    {
        //dd(Train::all());
        $train = Train::all()[$id];
        return view('train', compact('train'));
    }
}
