<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SitesettingController extends Controller
{
    // header
    public function header()
    {
        return view('Backend.pages.Setting.header');
    }

    // footer
    public function footer()
    {
        return view('Backend.pages.Setting.footer');
    }

    // General
    public function general()
    {
        return view('Backend.pages.Setting.general');
    }

    // limit
    public function limit()
    {
        return view('Backend.pages.Setting.limit');
    }

    //Pages
    public function pages()
    {
        return view('Backend.pages.Setting.pages');
    }

    //Social
    public function social()
    {
        return view('Backend.pages.Setting.social');
    }

    //Social
    public function contract()
    {
        return view('Backend.pages.Setting.contract');
    }
}
