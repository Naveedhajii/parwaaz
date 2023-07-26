<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilatorController extends Controller
{
    public function create()
    {
        return view('forms.facilator');
    }
}
