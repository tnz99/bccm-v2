<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws2017Controller extends Controller
{
    public function index(){
        $year = 2017;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "Bhutan's Forest and Nature Conservation Rules and Regulations - Guidelines for sustainable forest management.";
        $story = "Helped in maintaining sustainable forest management, carbon sequestration, biodiversity conservation, and climate change adaptation in Bhutan";
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
