<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Search_hospitalController extends Controller
{
    public function index() {

        return view('v_search_hospital');

    }
}
