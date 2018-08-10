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

    public function show($id)
    {
        $data = [
        	'news' => []
        ];

        return view('frontend.news-detail', $data);
    }
}
