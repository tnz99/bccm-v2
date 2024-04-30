<?php

namespace App\Http\Controllers\User\Climate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SummerController extends Controller
{
    public function index()
    {
        $description = "Bhutan's summer is a canvas of vibrant traditions and lush landscapes. From tending to crops and lively festivals to outdoor adventures against stunning mountains, it's a season of cultural richness. The community thrives with social gatherings, traditional attire, and fresh produce. Bhutan's summer is a celebration of heritage, community, and the breathtaking beauty of this Himalayan kingdom.";
        $links = ['/the-climate', '/the-summer', '/the-winter', '/the-spring', '/the-autumn'];
        $nextLink = "the-change";
        $cnavBg = "the-summer-cnav-bg";
        $cnavInnerBorder = "border-white";

        return view('user.summer')->with('darkThemeFlag', true)
                              ->with('bodyClass', 'the-summer')
                              ->with('name', 'SUMMER')
                              ->with('description', $description)
                              ->with('links', $links)
                              ->with('nextLink', $nextLink)
                              ->with('cnavBg', $cnavBg)
                              ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
