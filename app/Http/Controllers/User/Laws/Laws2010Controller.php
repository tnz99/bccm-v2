<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2010Controller extends Controller
{
    public function index(){
        $year = 2010;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "Bhutan National Environment Strategy (NES) - Comprehensive framework for environmental conservation and sustainable development. ";
        $story = "The NES provides a comprehensive framework for environmental conservation and sustainable development in Bhutan.
        It has helped in the effective management of natural resources and the protection of Bhutan's unique ecosystems.
        The NES has promoted sustainable agriculture practices, waste management, and the conservation of water resources.";
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
