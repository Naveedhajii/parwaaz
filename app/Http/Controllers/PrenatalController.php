<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrenatalController extends Controller
{
    public function create()
    {
        return view('forms.prenatal');
    }
}
