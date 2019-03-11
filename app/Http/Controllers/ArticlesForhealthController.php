<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesForhealthController extends Controller
{
    public function index() {

        return view('v_articlesForhealth');

    }
}
