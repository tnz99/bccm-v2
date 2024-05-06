<?php

namespace App\Http\Controllers\User\Change;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Change2Controller extends Controller
{
    public function index()
    {
        $links = ['/the-change', '/the-change2'];
        $nextLink = "the-laws";
        $cnavBg = "the-change-cnav-bg";
        $cnavInnerBorder = "border-white";

        return view('user.change2')->with('darkThemeFlag', true)
                               ->with('links', $links)
                               ->with('nextLink', $nextLink)
                               ->with('cnavBg', $cnavBg)
                               ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
