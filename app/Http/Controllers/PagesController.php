<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {

        $people = ['111','222','333'] ;
        $name = 'Hollow';

        return view('pages.about', compact('name','people'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
