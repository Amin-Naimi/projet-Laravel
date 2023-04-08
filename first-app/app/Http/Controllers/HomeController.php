<?php

namespace App\Http\Controllers;

use App\Models\EvenementSportif;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $evetnsSportifs = EvenementSportif::all();
        $data=[
            'title' => 'Evènnemnts sportif',
            'description'=> 'Liste des évènnements sportifs',
            'heading'=> config('app.name'),
            'eventsSportifs'=>$evetnsSportifs
        ];
        return view('home.index',$data);
    }
}
