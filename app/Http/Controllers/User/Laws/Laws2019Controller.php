<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2019Controller extends Controller
{
    public function index(){
        $year = 2019;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "Bhutan's National REDD+ Strategy - Reducing emissions through forest conservation.";
        $story = "Helped reducing emissions through forest conservation.";
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
