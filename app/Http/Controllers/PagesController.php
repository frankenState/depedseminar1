<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view('pages.welcome');
    }

    public function contacts(){
        return view('pages.contacts', [
            'mailinglist' => [
                'jamesgosling@email.com',
                'timebernerslee@email.com',
                'taylorotwell@email.com',
                'janedoe@email.com'
            ]
        ]);
    }

    public function aboutUs(){
        return view('pages.aboutus');
    }
}
