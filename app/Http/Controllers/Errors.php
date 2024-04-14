<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Errors extends Controller
{
    public function expire() {
        return redirect()->back();
    }
}
