<?php

namespace App\Http\Controllers\User\Flora;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Flora\FloraHome;
use App\Models\Story\Flora\Page5\Gallery1;
use App\Models\Story\Flora\Page5\Gallery2;
use App\Models\Story\Flora\Page5\Gallery3;
use App\Models\Story\Flora\Page5\Gallery4;
use App\Models\Story\Flora\Page5\Gallery5;
use App\Models\Story\Flora\Page5\Gallery6;
use App\Models\Story\Flora\Page5\Gallery7;
use App\Models\Story\Flora\Page5\Gallery8;

class Flora5Controller extends Controller
{
    public function index()
    {
        $links = ['/the-flora', '/the-flora2', '/the-flora3', '/the-flora4', '/the-flora5'];
        $nextLink = "the-fauna";
        $cnavBg = "the-flora-cnav-bg";
        $cnavInnerBorder = "border-white";

        $flora_home = FloraHome::orderBy('updated_at', 'desc')->first();
        $flora_page5_gallery1 = Gallery1::orderBy('updated_at', 'desc')->first();
        $flora_page5_gallery2 = Gallery2::orderBy('updated_at', 'desc')->first();
        $flora_page5_gallery3 = Gallery3::orderBy('updated_at', 'desc')->first();
        $flora_page5_gallery4 = Gallery4::orderBy('updated_at', 'desc')->first();
        $flora_page5_gallery5 = Gallery5::orderBy('updated_at', 'desc')->first();
        $flora_page5_gallery6 = Gallery6::orderBy('updated_at', 'desc')->first();
        $flora_page5_gallery7 = Gallery7::orderBy('updated_at', 'desc')->first();
        $flora_page5_gallery8 = Gallery8::orderBy('updated_at', 'desc')->first();

        return view('user.flora5')->with('darkThemeFlag', true)
                                ->with('bodyClass', '/the-flora5')
                                ->with('flora_home', $flora_home)
                                ->with('flora_page5_gallery1', $flora_page5_gallery1)
                                ->with('flora_page5_gallery2', $flora_page5_gallery2)
                                ->with('flora_page5_gallery3', $flora_page5_gallery3)
                                ->with('flora_page5_gallery4', $flora_page5_gallery4)
                                ->with('flora_page5_gallery5', $flora_page5_gallery5)
                                ->with('flora_page5_gallery6', $flora_page5_gallery6)
                                ->with('flora_page5_gallery7', $flora_page5_gallery7)
                                ->with('flora_page5_gallery8', $flora_page5_gallery8)
                                ->with('links', $links)
                                ->with('nextLink', $nextLink)
                                ->with('cnavBg', $cnavBg)
                                ->with('cnavInnerBorder', $cnavInnerBorder);
        }
}
