<?php

namespace App\Http\Controllers\User\News;

use Illuminate\Http\Request;
use App\Models\Gallery\Gallery2;
use App\Http\Controllers\Controller;

class News3Controller extends Controller
{
    public function index()
    {

        $links = ['/the-newsE', '/the-newsE2', '/the-newsE3', '/the-newsE4', '/the-newsE5'];

        $cnavBg = "the-spring-cnav-bg";
        $cnavInnerBorder = "border-gray";

        $gallery2 = Gallery2::orderBy('updated_at', 'desc')->first();

        return view('user.newsE3')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-newsE3')
                                  ->with('gallery2', $gallery2)
                                  ->with('links', $links)

                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
