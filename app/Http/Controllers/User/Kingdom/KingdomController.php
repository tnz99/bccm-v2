<?php

namespace App\Http\Controllers\User\Kingdom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story\Kingdom\KingdomHome\KingdomHome;

class KingdomController extends Controller
{
    public function index()
    {
        $links = ['/the-kingdom', '/the-kingdom2'];
        $nextLink = "the-flora";
        $cnavBg = "the-kingdom-cnav-bg";
        $cnavInnerBorder = "border-gray";


        $kingdom_home = KingdomHome::orderBy('updated_at', 'desc')->first();

        return view('user.kingdom')->with('darkThemeFlag', true)
                                  ->with('bodyClass', 'the-kingdom')
                                  ->with('kingdom_home', $kingdom_home)
                                  ->with('links', $links)
                                  ->with('nextLink', $nextLink)
                                  ->with('cnavBg', $cnavBg)
                                  ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
