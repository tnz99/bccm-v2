<?php

namespace App\Http\Controllers\User\Fauna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page6\Gallery1;
use App\Models\Story\Fauna\Page6\Gallery2;
use App\Models\Story\Fauna\Page6\Gallery3;
use App\Models\Story\Fauna\Page6\Gallery4;
use App\Models\Story\Fauna\Page6\Gallery5;
use App\Models\Story\Fauna\Page6\Gallery6;
use App\Models\Story\Fauna\Page6\Gallery7;
use App\Models\Story\Fauna\Page6\Gallery8;
use App\Models\Story\Fauna\Page6\Gallery9;
use App\Models\Story\Fauna\FaunaHome\FaunaHome;

class Butterfly2Controller extends Controller
{
    public function index()
    {
        $links = ['/the-fauna', '/the-mammals', '/the-mammals2', '/the-birds', '/the-birds2', '/the-butterfly2', '/the-park'];
        $nextLink = "the-climate";
        $cnavBg = "the-fauna-cnav-bg";
        $cnavInnerBorder = "border-white";

        $fauna_home = FaunaHome::orderBy('updated_at', 'desc')->first();

        $fauna_page6_gallery1 = Gallery1::orderBy('updated_at', 'desc')->first();
        $fauna_page6_gallery2 = Gallery2::orderBy('updated_at', 'desc')->first();
        $fauna_page6_gallery3 = Gallery3::orderBy('updated_at', 'desc')->first();
        $fauna_page6_gallery4 = Gallery4::orderBy('updated_at', 'desc')->first();
        $fauna_page6_gallery5 = Gallery5::orderBy('updated_at', 'desc')->first();
        $fauna_page6_gallery6 = Gallery6::orderBy('updated_at', 'desc')->first();
        $fauna_page6_gallery7 = Gallery7::orderBy('updated_at', 'desc')->first();
        $fauna_page6_gallery8 = Gallery8::orderBy('updated_at', 'desc')->first();
        $fauna_page6_gallery9 = Gallery9::orderBy('updated_at', 'desc')->first();

        return view('user.butterfly2')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-butterfly2')
                                  ->with('fauna_home', $fauna_home)
                                  ->with('fauna_page6_gallery1', $fauna_page6_gallery1)
                                  ->with('fauna_page6_gallery2', $fauna_page6_gallery2)
                                  ->with('fauna_page6_gallery3', $fauna_page6_gallery3)
                                  ->with('fauna_page6_gallery4', $fauna_page6_gallery4)
                                  ->with('fauna_page6_gallery5', $fauna_page6_gallery5)
                                  ->with('fauna_page6_gallery6', $fauna_page6_gallery6)
                                  ->with('fauna_page6_gallery7', $fauna_page6_gallery7)
                                  ->with('fauna_page6_gallery8', $fauna_page6_gallery8)
                                  ->with('fauna_page6_gallery9', $fauna_page6_gallery9)
                                  ->with('links', $links)
                                  ->with('nextLink', $nextLink)
                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}


