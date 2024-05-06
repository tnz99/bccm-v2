<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2018Controller extends Controller
{
    public function index(){
        $year = 2018;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "Bhutan's Renewable Energy Policy - Increasing the share of renewable energy sources.";
        $story = "Installed capacity of 2.33 GW, Bhutan over the years has successfully developed its hydropower resources, much of which is exported to India. The Bhutan Renewable Energy Master Plan estimates that the country could produce 12 gigawatts of solar and 760 megawatts of wind energy.";
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
