<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenderController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Render the page Dashboard
     */
    public function dashboard()
    {
        return view('dashboard.page');
    }

    public function business()
    {
        return view('business.page');
    }
}
