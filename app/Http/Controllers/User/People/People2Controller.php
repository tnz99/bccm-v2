<?php

namespace App\Http\Controllers\User\People;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class People2Controller extends Controller
{
    public function index()
    {
        $links = ['/the-people', '/the-people2'];
        $nextLink = "/the-kingdom";
        $cnavBg = "the-people-cnav-bg";
        $cnavInnerBorder = "border-white";

        return view('user.people2')->with('darkThemeFlag', true)
                               ->with('links', $links)
                               ->with('nextLink', $nextLink)
                               ->with('cnavBg', $cnavBg)
                               ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
