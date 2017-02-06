<?php

namespace App\Http\Controllers;

class TopPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        return view('top_page', ['h1' => 'lumen + twig']);
    }
}
