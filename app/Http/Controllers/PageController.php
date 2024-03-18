<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function privacyAndPolicy()
    {
        return view('pages.privacy-and-policy');
    }

    public function termsAndConditions()
    {
        return view('pages.terms-and-conditions');
    }

    public function iotPlatformPage()
    {
        $page = explode('/', request()->route()->uri, 2)[1];

        return view('pages.iot-platform.' . $page);
    }

    public function servicesPage()
    {
        $page = explode('/', request()->route()->uri, 2)[1];

        return view('pages.services.' . $page);
    }

    public function differencesPage()
    {
        $page = explode('/', request()->route()->uri, 2)[1];

        return view('pages.differences.' . $page);
    }
}
