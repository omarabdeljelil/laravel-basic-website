<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsApiController extends Controller
{
    public function index()
    {
        return view('itemsapitest.index');
    }
}
