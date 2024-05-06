<?php

namespace App\Http\Controllers\User\People;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
        $links = ['/the-people', '/the-people2'];
        $nextLink = "/the-kingdom";
        $cnavBg = "the-people-cnav-bg";
        $cnavInnerBorder = "border-white";

        return view('user.story')->with('darkThemeFlag', true)
                             ->with('bodyClass', 'the-people')
                             ->with('name', 'PEOPLE')
                             ->with('description', $description)
                             ->with('links', $links)
                             ->with('nextLink', $nextLink)
                             ->with('cnavBg', $cnavBg)
                             ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
