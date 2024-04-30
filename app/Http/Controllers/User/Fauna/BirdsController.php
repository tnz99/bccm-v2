<?php

namespace App\Http\Controllers\User\Fauna;
use App\Models\Story\Fauna\Page4\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BirdsController extends Controller
{
    public function index()
    {
        $links = ['/the-fauna', '/the-mammals', '/the-mammals2', '/the-birds', '/the-birds2', '/the-butterfly2', '/the-park'];
        $nextLink = "the-climate";
        $cnavBg = "the-winter-cnav-bg";
        $cnavInnerBorder = "border-white";

        $fauna_page4 = Gallery::orderBy('updated_at', 'desc')->first();

        return view('user.birds')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-birds')
                                  ->with('fauna_page4', $fauna_page4)
                                  ->with('links', $links)
                                  ->with('nextLink', $nextLink)
                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
