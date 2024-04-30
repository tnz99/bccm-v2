<?php

namespace App\Http\Controllers\User\Fauna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\Page2\Gallery;
use App\Models\Story\Fauna\Page3\Gallery1;
use App\Models\Story\Fauna\Page3\Gallery2;
use App\Models\Story\Fauna\Page3\Gallery3;
use App\Models\Story\Fauna\Page3\Gallery4;
use App\Models\Story\Fauna\Page3\Gallery5;
use App\Models\Story\Fauna\Page3\Gallery6;

class Mammals2Controller extends Controller
{
    public function index()
    {
        $links = ['/the-fauna', '/the-mammals', '/the-mammals2', '/the-birds', '/the-birds2', '/the-butterfly2', '/the-park'];
        $nextLink = "the-climate";
        $cnavBg = "the-fauna2-cnav-bg";
        $cnavInnerBorder = "border-white";

        $fauna_page2 = Gallery::orderBy('updated_at', 'desc')->first();
        $fauna_page3_gallery1 = Gallery1::orderBy('updated_at', 'desc')->first();
        $fauna_page3_gallery2 = Gallery2::orderBy('updated_at', 'desc')->first();
        $fauna_page3_gallery3 = Gallery3::orderBy('updated_at', 'desc')->first();
        $fauna_page3_gallery4 = Gallery4::orderBy('updated_at', 'desc')->first();
        $fauna_page3_gallery5 = Gallery5::orderBy('updated_at', 'desc')->first();
        $fauna_page3_gallery6 = Gallery6::orderBy('updated_at', 'desc')->first();

        return view('user.mammals2')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-mammals2')
                                  ->with('fauna_page2', $fauna_page2)
                                  ->with('fauna_page3_gallery1', $fauna_page3_gallery1)
                                  ->with('fauna_page3_gallery2', $fauna_page3_gallery2)
                                  ->with('fauna_page3_gallery3', $fauna_page3_gallery3)
                                  ->with('fauna_page3_gallery4', $fauna_page3_gallery4)
                                  ->with('fauna_page3_gallery5', $fauna_page3_gallery5)
                                  ->with('fauna_page3_gallery6', $fauna_page3_gallery6)
                                  ->with('links', $links)
                                  ->with('nextLink', $nextLink)
                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
