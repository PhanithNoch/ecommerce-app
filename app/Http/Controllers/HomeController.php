<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home',[
            'slides'=> Slide::take(3)->orderBy('order')->get(),
            'promotions'=> Promotion::take(2)->latest()->get(),
        ]);
    }
}
