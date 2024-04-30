<?php

namespace App\Http\Controllers\User\Fauna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Fauna\Page7\Gallery1;
use App\Models\Story\Fauna\Page7\Gallery2;
use App\Models\Story\Fauna\Page7\Gallery3;
use App\Models\Story\Fauna\Page7\Gallery4;
use App\Models\Story\Fauna\Page7\Gallery5;
use App\Models\Story\Fauna\Page7\Gallery6;
use App\Models\Story\Fauna\Page7\Gallery7;
use App\Models\Story\Fauna\Page7\Gallery8;
use App\Models\Story\Fauna\Page7\Gallery9;
use App\Models\Story\Fauna\Page7\Gallery10;
use App\Models\Story\Fauna\FaunaHome\FaunaHome;

class ParkController extends Controller
{
    public function index()
    {
        $links = ['/the-fauna', '/the-mammals', '/the-mammals2', '/the-birds', '/the-birds2', '/the-butterfly2', '/the-park'];
        $nextLink = "the-climate";
        $cnavBg = "the-fauna-cnav-bg";
        $cnavInnerBorder = "border-white";

        $fauna_home = FaunaHome::orderBy('updated_at', 'desc')->first();

        $fauna_page7_gallery1 = Gallery1::orderBy('updated_at', 'desc')->first();
        $fauna_page7_gallery2 = Gallery2::orderBy('updated_at', 'desc')->first();
        $fauna_page7_gallery3 = Gallery3::orderBy('updated_at', 'desc')->first();
        $fauna_page7_gallery4 = Gallery4::orderBy('updated_at', 'desc')->first();
        $fauna_page7_gallery5 = Gallery5::orderBy('updated_at', 'desc')->first();
        $fauna_page7_gallery6 = Gallery6::orderBy('updated_at', 'desc')->first();
        $fauna_page7_gallery7 = Gallery7::orderBy('updated_at', 'desc')->first();
        $fauna_page7_gallery8 = Gallery8::orderBy('updated_at', 'desc')->first();
        $fauna_page7_gallery9 = Gallery9::orderBy('updated_at', 'desc')->first();
        $fauna_page7_gallery10 = Gallery10::orderBy('updated_at', 'desc')->first();


        return view('user.park')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-park')
                                  ->with('fauna_home', $fauna_home)
                                  ->with('fauna_page7_gallery1', $fauna_page7_gallery1)
                                  ->with('fauna_page7_gallery2', $fauna_page7_gallery2)
                                  ->with('fauna_page7_gallery3', $fauna_page7_gallery3)
                                  ->with('fauna_page7_gallery4', $fauna_page7_gallery4)
                                  ->with('fauna_page7_gallery5', $fauna_page7_gallery5)
                                  ->with('fauna_page7_gallery6', $fauna_page7_gallery6)
                                  ->with('fauna_page7_gallery7', $fauna_page7_gallery7)
                                  ->with('fauna_page7_gallery8', $fauna_page7_gallery8)
                                  ->with('fauna_page7_gallery9', $fauna_page7_gallery9)
                                  ->with('fauna_page7_gallery10', $fauna_page7_gallery10)

                                  ->with('links', $links)
                                  ->with('nextLink', $nextLink)
                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
