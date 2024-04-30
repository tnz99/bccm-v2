<?php

namespace App\Http\Controllers\User\Fauna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\FaunaHome\FaunaHome;

class FaunaController extends Controller
{
    public function index()
    {
        $links = ['/the-fauna', '/the-mammals', '/the-mammals2', '/the-birds', '/the-birds2', '/the-butterfly2', '/the-park'];
        $nextLink = "the-climate";
        $cnavBg = "the-fauna-cnav-bg";
        $cnavInnerBorder = "border-white";
        $fauna_home = FaunaHome::orderBy('updated_at', 'desc')->first();

        return view('user.fauna')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-fauna')
                                  ->with('fauna_home', $fauna_home)
                                  ->with('links', $links)
                                  ->with('nextLink', $nextLink)
                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);

    }
}
