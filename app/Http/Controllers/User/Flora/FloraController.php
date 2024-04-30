<?php

namespace App\Http\Controllers\User\Flora;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\FloraHome;

class FloraController extends Controller
{
    public function index()
    {
        $links = ['/the-flora', '/the-flora2', '/the-flora3', '/the-flora4', '/the-flora5'];
        $nextLink = "the-fauna";
        $cnavBg = "the-flora-cnav-bg";
        $cnavInnerBorder = "border-white";

        $flora_home = FloraHome::orderBy('updated_at', 'desc')->first();

        return view('user.flora')->with('darkThemeFlag', true)
                                  ->with('bodyClass', '/the-flora2')
                                  ->with('flora_home', $flora_home)
                                  ->with('links', $links)
                                  ->with('nextLink', $nextLink)
                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);

    }
}
