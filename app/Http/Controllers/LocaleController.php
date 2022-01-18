<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Locale;

class LocaleController extends Controller
{
    public function index($lang)
    {
        (new Locale())->putLocal($lang);
        return redirect()->back();
    }
}
