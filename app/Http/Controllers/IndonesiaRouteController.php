<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndonesiaRouteController extends Controller
{
    public function index()
    {
        return View('pages.flight-routes.flight-indonesia');
    }
}
