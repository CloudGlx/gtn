<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('main/home');
    }

    public function contactusView(){
        
          return view('main/contact');
    }

    public function contactusLogic(){
        

    }
}
