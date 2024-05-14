<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function urunler() {
        return view(('Frontend.Pages.products'));
    }

    public function urundetay() {
        return view('Frontend.Pages.product');
    }

    public function hakkimizda() {
        $about= About::first();
        return view('Frontend.Pages.about', compact('about'));
    }

    public function iletisim() {
        return view('Frontend.Pages.contact');
    }

    public function sepet() {
        return view('Frontend.Pages.cart');
    }

    public function odeme() {
        return view('Frontend.Pages.odeme');
    }

    public function satinal() {
        return view('Frontend.Pages.satinal');
    }

    public function admin() {
        return view('Backend.admin');
    }





}
