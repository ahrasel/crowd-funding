<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home.home');
    }

    public function aboutUs()
    {
        return view('site.about-us');
    }

    public function contact()
    {
        return view('site.contact');
    }
}
