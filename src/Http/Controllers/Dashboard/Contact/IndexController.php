<?php

namespace Bolsainmobiliariape\ModuleContact\Http\Controllers\Dashboard\Contact;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('module-contact::dashboard.contact.indexwrapper');
    }

    public function show()
    {
        return view('module-contact::dashboard.contact.showwrapper');
    }
}