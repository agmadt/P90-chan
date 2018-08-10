<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'news' => [],
            'photos' => []
        ];

        return view('frontend.index', $data);
    }

    public function search()
    {
    	$data = [
    		
    	];
    	
        return view('frontend.search', $data);
    }
}
