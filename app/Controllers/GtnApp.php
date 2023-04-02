<?php

namespace App\Controllers;

class GtnApp extends BaseController
{
    public function index()
    {
        return view('main/app/home');
    }

    public function contactusView(){
        
          return view('main/app/contact');
    }

    public function contactusLogic(){
        

    }

    public function tvshows(){
        return view('main/app/shows');
 }

 public function gtnnews(){
    return view('main/app/news');
 }

 public function app_home(){
    return view ('main/app/home');
 }
}
