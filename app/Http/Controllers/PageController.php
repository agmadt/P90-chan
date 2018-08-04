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
}
