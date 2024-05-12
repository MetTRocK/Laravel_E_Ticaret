<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;

#use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ulasim;

class PageHomeController extends Controller
{
    public function index(){
        $slider = Slider::where('status','1')->first();
        $ulas = ulasim::first();
        $categories = Category::where('status','1')->get();


        return view('Frontend.Pages.index',compact('slider','ulas','categories'));
    }
}
