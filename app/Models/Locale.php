<?php

namespace App\Models;
use Illuminate\Support\Facades\Session;

class Locale
{
    public function putLocal($lang)
    {
        Session::put('locale', $lang);
    }
}
