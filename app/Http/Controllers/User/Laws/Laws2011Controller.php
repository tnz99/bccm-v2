<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2011Controller extends Controller
{
    public function index(){
        $year = "2011-2013";
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "Bhutan Climate Change Policy - Reducing greenhouse gas emissions and enhancing resilience. ";
        $story = "The BCCAP outlined specific actions to address climate change impacts, such as promoting energy efficiency and sustainable transportation.
        It has contributed to the development and implementation of climate change mitigation and adaptation projects in Bhutan.
        The BCCAP has enhanced awareness and capacity building on climate change issues among various stakeholders.";
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
