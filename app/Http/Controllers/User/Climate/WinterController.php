<?php

namespace App\Http\Controllers\User\Climate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WinterController extends Controller
{
    public function index()
    {
        $description = "Bhutanese winters are marked by festive gatherings and a cozy lifestyle. Traditional clothing keeps locals warm as they celebrate cultural richness. The serene landscapes blanketed in snow create a tranquil backdrop.";
        $links = ['/the-climate', '/the-summer', '/the-winter', '/the-spring', '/the-autumn'];
        $nextLink = "the-change";
        $cnavBg = "the-winter-cnav-bg";
        $cnavInnerBorder = "border-gray";

        return view('user.winter')->with('darkThemeFlag', false)
                              ->with('bodyClass', 'the-winter')
                              ->with('name', 'WINTER')
                              ->with('description', $description)
                              ->with('links', $links)
                              ->with('nextLink', $nextLink)
                              ->with('cnavBg', $cnavBg)
                              ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
