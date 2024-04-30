<?php

namespace App\Http\Controllers\User\Climate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClimateController extends Controller
{
    public function index()
    {
        $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
        $links = ['/the-climate', '/the-summer', '/the-winter', '/the-spring', '/the-autumn'];
        $nextLink = "the-change";
        $cnavBg = "the-climate-cnav-bg";
        $cnavInnerBorder = "border-gray";

        return view('user.story')->with('darkThemeFlag', true)
                             ->with('bodyClass', 'the-climate')
                             ->with('name', 'CLIMATE')
                             ->with('description', $description)
                             ->with('links', $links)
                             ->with('nextLink', $nextLink)
                             ->with('cnavBg', $cnavBg)
                             ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
