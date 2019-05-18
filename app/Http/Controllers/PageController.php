<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {

    public function showHome() {

        return view('public/home');

    }

}
