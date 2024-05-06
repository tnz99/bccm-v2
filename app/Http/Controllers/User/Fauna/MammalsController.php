<?php

namespace App\Http\Controllers\User\Fauna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story\Fauna\Page2\Gallery;

class MammalsController extends Controller
{
    public function index()
    {

        $links = ['/the-fauna', '/the-mammals', '/the-mammals2', '/the-birds', '/the-birds2', '/the-butterfly2', '/the-park'];
        $nextLink = "the-climate";
        $cnavBg = "the-fauna2-cnav-bg";
        $cnavInnerBorder = "border-white";

        $fauna_page2 = Gallery::orderBy('updated_at', 'desc')->first();

        return view('user.mammals')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-mammals')
                                  ->with('fauna_page2', $fauna_page2)
                                  ->with('links', $links)
                                  ->with('nextLink', $nextLink)
                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
