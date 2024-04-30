<?php

namespace App\Http\Controllers\User\Climate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutumnController extends Controller
{
    public function index()
    {
        $description = "Bhutan's autumn (September to November) is a masterpiece painted in gold and amber. The air is crisp, and the landscape glows with the warm colors of changing leaves. Harvest activities unfold against the backdrop of clear blue skies, offering a captivating setting for lively festivals. It's a season that beckons explorers to witness the captivating allure of Bhutan's cultural and natural wonders.";
        $links = ['/the-climate', '/the-summer', '/the-winter', '/the-spring', '/the-autumn'];
        $nextLink = "the-change";
        $cnavBg = "the-autumn-cnav-bg";
        $cnavInnerBorder = "border-gray";

        return view('user.autumn')->with('darkThemeFlag', true)
                              ->with('bodyClass', 'the-autumn')
                              ->with('name', 'AUTUMN')
                              ->with('description', $description)
                              ->with('links', $links)
                              ->with('nextLink', $nextLink)
                              ->with('cnavBg', $cnavBg)
                              ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
