<?php

namespace App\Http\Controllers\User\Change;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    public function index()
    {
        $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
        $links = ['/the-change', '/the-change2'];
        $nextLink = "the-laws";
        $cnavBg = "the-change-cnav-bg";
        $cnavInnerBorder = "border-white";

        return view('user.story')->with('darkThemeFlag', true)
                             ->with('bodyClass', 'the-change')
                             ->with('name', 'CHANGE')
                             ->with('description', $description)
                             ->with('links', $links)
                             ->with('nextLink', $nextLink)
                             ->with('cnavBg', $cnavBg)
                             ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
