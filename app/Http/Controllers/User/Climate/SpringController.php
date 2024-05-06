<?php

namespace App\Http\Controllers\User\Climate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpringController extends Controller
{
    public function index()
    {
        $description = "Spring brings a burst of color and life to Bhutan. The landscape transforms into a riot of blossoming flowers and vibrant greenery. This season is ideal for trekking and hiking as the weather becomes milder. Rhododendrons, the national flower, paint the hillsides in various hues. Farmers begin planting crops, and festivals celebrating renewal and vitality are common. Spring in Bhutan is a time of natural beauty and cultural vibrancy.";
        $links = ['/the-climate', '/the-summer', '/the-winter', '/the-spring', '/the-autumn'];
        $nextLink = "the-change";
        $cnavBg = "the-spring-cnav-bg";
        $cnavInnerBorder = "border-white";

        return view('user.spring')->with('darkThemeFlag', false)
                              ->with('bodyClass', 'the-spring')
                              ->with('name', 'SPRING')
                              ->with('description', $description)
                              ->with('links', $links)
                              ->with('nextLink', $nextLink)
                              ->with('cnavBg', $cnavBg)
                              ->with('cnavInnerBorder', $cnavInnerBorder);
    }
}
