<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $data = [];

        return view('frontend.about', $data);
    }

    public function donation()
    {
        $data = [];

        return view('frontend.donation', $data);
    }

    public function contactUs()
    {
        $data = [];

        return view('frontend.contact', $data);
    }
}
