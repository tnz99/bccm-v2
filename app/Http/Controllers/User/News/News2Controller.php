<?php

namespace App\Http\Controllers\User\News;

use Illuminate\Http\Request;
use App\Models\Gallery\Gallery1;
use App\Http\Controllers\Controller;

class News2Controller extends Controller
{
    public function index()
    {

        $links = ['/the-newsE', '/the-newsE2', '/the-newsE3', '/the-newsE4', '/the-newsE5'];

        $cnavBg = "the-spring-cnav-bg";
        $cnavInnerBorder = "border-gray";

        $gallery1 = Gallery1::orderBy('updated_at', 'desc')->first();

        return view('user.newsE2')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-newsE2')
                                  ->with('gallery1', $gallery1)
                                  ->with('links', $links)

                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);


    }
}
