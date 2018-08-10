<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $data = [
        	'news' => []
        ];

        return view('frontend.news', $data);
    }
}
