<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2001Controller extends Controller
{
    public function index()
    {
        $year = 2001;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "The Alternative Renewable Energy Policy - “Encouraging the use of alternative renewable energy sources such as solar, wind, embedded hydro, and biogas.”";
        $story = "Helped Bhutan diversify its fuel mix and maintain its net-zero carbon emissions. Bhutan's electricity access rate improved from 61 per cent in 2006 to almost cent per cent in 2019, well ahead of the intended 2020 target.";

        return view('components.yearly-story')->with('darkThemeFlag', false)
                                               ->with('links', $links)
                                               ->with('nextLink', $nextLink)
                                               ->with('bodyClass', 'the-laws-1')
                                               ->with('year', $year)
                                               ->with('subtext', $subtext)
                                               ->with('story', $story)
                                               ->with('cnavBg', $cnavBg)
                                               ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
