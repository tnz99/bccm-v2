<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2015Controller extends Controller
{
    public function index(){
        $year = 2015;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "Bhutan's Intended Nationally Determined Contributions (INDCs) - Commitments to reduce emissions and adapt to climate change.";
        $story = "The INDCs demonstrate Bhutan's commitments to reducing greenhouse gas emissions and adapting to climate change.
        Bhutan aims to remain carbon neutral by maintaining its forest cover and implementing renewable energy projects.
        The INDCs have provided a framework for Bhutan's climate change actions and helped mobilize international support and funding.";
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
