<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-end.index');
    }

    public function about()
    {
        return view('front-end.about-us');
    }

    public function contact()
    {
        return view('front-end.contact-us');
    }
    
    public function blog()
    {
        return view('front-end.our-blog');
    }
}
