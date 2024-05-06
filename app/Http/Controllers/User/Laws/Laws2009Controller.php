<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2009Controller extends Controller
{
    public function index()
    {
        $year = 2009;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "Bhutan Climate Change Policy (BCCP) - Addressing climate change and promoting sustainable development.";
        $story = "The policy has guided Bhutan's efforts in addressing climate change and promoting sustainable development.
        Bhutan has committed to remaining carbon neutral by maintaining its forest cover and utilizing renewable energy sources.
        The BCCP has facilitated the integration of climate change considerations into national development plans and policies.";

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
