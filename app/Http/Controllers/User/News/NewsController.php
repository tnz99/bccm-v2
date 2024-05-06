<?php

namespace App\Http\Controllers\User\News;

use Illuminate\Http\Request;
use App\Models\NewsAndEvents;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {

        $links = ['/the-newsE', '/the-newsE2', '/the-newsE3', '/the-newsE4', '/the-newsE5'];

        $cnavBg = "the-spring-cnav-bg";
        $cnavInnerBorder = "border-gray";

        $news_and_events = NewsAndEvents::orderBy('updated_at', 'desc')->first();

        return view('user.newsE')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-newsE')
                                  ->with('news_and_events', $news_and_events)
                                  ->with('links', $links)

                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);

    }
}
