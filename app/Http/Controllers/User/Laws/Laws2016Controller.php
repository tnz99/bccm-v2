<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2016Controller extends Controller
{
    public function index(){
        $year = 2016;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "Bhutan's National Adaptation Plan (NAP) - Enhancing resilience and reducing vulnerability.";
        $story = "0% emissions: a net carbon sink.
        3 NAPA projects 10 adaptation needs identified in Nationally Determined Contribution (NDC).
        2% national budget on climate change (2012-2013).
        4 NAP Consultation Workshops held. ";
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
