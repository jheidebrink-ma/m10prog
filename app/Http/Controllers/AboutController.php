<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function about()
    {
        return view('pages.page', ['content' => 'Dit is de about pagina.']);
    }
}
