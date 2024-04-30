<?php

namespace App\Http\Controllers\User\Laws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laws1995Controller extends Controller
{
    public function index()
    {
        $year = 1995;
        $cnavBg = "the-law-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $links = ['/the-laws', '/laws/1995'];
        $nextLink = "/the-people";
        $subtext = "Bhutan's Forest and Nature Conservation Act - Conservation and sustainable management of Bhutan's forests.";
        $story = "The act has helped in the conservation and sustainable management of Bhutan's forests, which cover over 70% of the country's land area.
            Bhutan has maintained a high forest coverage, which contributes to carbon sequestration and helps mitigate climate change.
            The act has facilitated the protection of biodiversity, including endangered species like the Bengal tiger and snow leopard.";

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
