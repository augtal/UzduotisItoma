<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class LanguageController extends Controller
{
    public function changeLanguage($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session()->put('language', $lang);
        }
        return redirect()->back();
    }
}
