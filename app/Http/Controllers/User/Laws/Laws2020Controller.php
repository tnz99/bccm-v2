<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2020Controller extends Controller
{
    public function index(){
        $year = 2020;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "The Climate Change Policy of the Kingdom of Bhutan - Sustainable development and carbon neutrality.";
        $story = "Helping to maintain sustainable development and the goal of achieving carbon neutrality.";
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
