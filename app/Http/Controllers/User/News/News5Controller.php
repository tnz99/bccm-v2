<?php

namespace App\Http\Controllers\User\News;

use Illuminate\Http\Request;
use App\Models\Gallery\Gallery4;
use App\Http\Controllers\Controller;

class News5Controller extends Controller
{
    public function index()
    {

        $links = ['/the-newsE', '/the-newsE2', '/the-newsE3', '/the-newsE4', '/the-newsE5'];

        $cnavBg = "the-spring-cnav-bg";
        $cnavInnerBorder = "border-gray";

        $gallery4 = Gallery4::orderBy('updated_at', 'desc')->first();

        return view('user.newsE5')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-newsE5')
                                  ->with('gallery4', $gallery4)
                                  ->with('links', $links)

                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
