<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutController extends Controller
{
    public function index()
    {
        $cnavBg = "the-about-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $about_us = AboutUs::orderBy('updated_at', 'desc')->first();
        return view('user.about', [
            'darkThemeFlag' => true,
            'bodyClass' => 'about',
            'about_us' => $about_us // Pass the retrieved AboutUs model instance to the view
        ]);
    }
}
