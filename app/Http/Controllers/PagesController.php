<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\Test;

class PagesController extends Controller
{
    public function welcome(){
        $test = new Test();
        
        return view('pages.welcome', ['testdata' => $test->hello()]);
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
