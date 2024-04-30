<?php

namespace App\Http\Controllers\User\News;

use Illuminate\Http\Request;
use App\Models\Gallery\Gallery3;
use App\Http\Controllers\Controller;

class News4Controller extends Controller
{
    public function index()
    {

        $links = ['/the-newsE', '/the-newsE2', '/the-newsE3', '/the-newsE4', '/the-newsE5'];

        $cnavBg = "the-spring-cnav-bg";
        $cnavInnerBorder = "border-gray";

        $gallery3 = Gallery3::orderBy('updated_at', 'desc')->first();

        return view('user.newsE4')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-newsE4')
                                  ->with('gallery3', $gallery3)
                                  ->with('links', $links)

                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}