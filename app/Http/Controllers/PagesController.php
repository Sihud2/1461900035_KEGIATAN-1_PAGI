<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('0035.home_0035');
    }

    public function artikel()
    {
        return view('0035.artikel_0035');
    }

    public function contact()
    {
        return view('0035.contact_0035');
    }
}
