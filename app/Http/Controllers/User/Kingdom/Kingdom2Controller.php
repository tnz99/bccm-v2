<?php

namespace App\Http\Controllers\User\Kingdom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\KingdomHome\KingdomHome;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries1;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries2;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries3;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries4;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries5;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries6;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries7;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries8;
use App\Models\Story\Kingdom\Gallery\Galleries\Galleries9;

class Kingdom2Controller extends Controller
{
    public function index()
    {
        $links = ['/the-kingdom', '/the-kingdom2'];
        $nextLink = "the-flora";
        $cnavBg = "the-kingdom-cnav-bg";
        $cnavInnerBorder = "border-white";

        $kingdom_home = KingdomHome::orderBy('updated_at', 'desc')->first();

        $gallery1 = Galleries1::orderBy('updated_at', 'desc')->first();
        $gallery2 = Galleries2::orderBy('updated_at', 'desc')->first();
        $gallery3 = Galleries3::orderBy('updated_at', 'desc')->first();
        $gallery4 = Galleries4::orderBy('updated_at', 'desc')->first();
        $gallery5 = Galleries5::orderBy('updated_at', 'desc')->first();
        $gallery6 = Galleries6::orderBy('updated_at', 'desc')->first();
        $gallery7 = Galleries7::orderBy('updated_at', 'desc')->first();
        $gallery8 = Galleries8::orderBy('updated_at', 'desc')->first();
        $gallery9 = Galleries9::orderBy('updated_at', 'desc')->first();


        return view('user.kingdom2')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-kingdom2')
                                  ->with('gallery1', $gallery1)
                                  ->with('gallery2', $gallery2)
                                  ->with('gallery3', $gallery3)
                                  ->with('gallery4', $gallery4)
                                  ->with('gallery5', $gallery5)
                                  ->with('gallery6', $gallery6)
                                  ->with('gallery7', $gallery7)
                                  ->with('gallery8', $gallery8)
                                  ->with('gallery9', $gallery9)
                                  ->with('kingdom_home', $kingdom_home)
                                  ->with('links', $links)
                                  ->with('nextLink', $nextLink)
                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }


}
