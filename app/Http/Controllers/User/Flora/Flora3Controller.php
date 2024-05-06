<?php

namespace App\Http\Controllers\User\Flora;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\FloraHome;
use App\Models\Story\Flora\Page3\Gallery1;
use App\Models\Story\Flora\Page3\Gallery2;
use App\Models\Story\Flora\Page3\Gallery3;
use App\Models\Story\Flora\Page3\Gallery4;
use App\Models\Story\Flora\Page3\Gallery5;
use App\Models\Story\Flora\Page3\Gallery6;
use App\Models\Story\Flora\Page3\Gallery7;
use App\Models\Story\Flora\Page3\Gallery8;
use App\Models\Story\Flora\Page3\Gallery9;
use App\Models\Story\Flora\Page3\Gallery10;

class Flora3Controller extends Controller
{
    public function index()
    {
        $links = ['/the-flora', '/the-flora2','/the-flora3', '/the-flora4', '/the-flora5'];
        $nextLink = "the-fauna";
        $cnavBg = "the-flora-cnav-bg";
        $cnavInnerBorder = "border-white";

        $flora_home = FloraHome::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery1 = Gallery1::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery2 = Gallery2::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery3 = Gallery3::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery4 = Gallery4::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery5 = Gallery5::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery6 = Gallery6::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery7 = Gallery7::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery8 = Gallery8::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery9 = Gallery9::orderBy('updated_at', 'desc')->first();
        $flora_page3_gallery10 = Gallery10::orderBy('updated_at', 'desc')->first();

        return view('user.flora3')->with('darkThemeFlag', true)
                                ->with('bodyClass', '/the-flora3')
                                ->with('flora_home', $flora_home)
                                ->with('flora_page3_gallery1', $flora_page3_gallery1)
                                ->with('flora_page3_gallery2', $flora_page3_gallery2)
                                ->with('flora_page3_gallery3', $flora_page3_gallery3)
                                ->with('flora_page3_gallery4', $flora_page3_gallery4)
                                ->with('flora_page3_gallery5', $flora_page3_gallery5)
                                ->with('flora_page3_gallery6', $flora_page3_gallery6)
                                ->with('flora_page3_gallery7', $flora_page3_gallery7)
                                ->with('flora_page3_gallery8', $flora_page3_gallery8)
                                ->with('flora_page3_gallery9', $flora_page3_gallery9)
                                ->with('flora_page3_gallery10', $flora_page3_gallery10)
                                ->with('links', $links)
                                ->with('nextLink', $nextLink)
                                ->with('cnavBg', $cnavBg)
                                ->with('cnavInnerBorder', $cnavInnerBorder);
        }
}
