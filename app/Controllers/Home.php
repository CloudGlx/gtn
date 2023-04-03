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

    public function tvshows(){
        return view('main/shows');
 }

 public function gtnnews(){
    return view('main/news');
 }

 public function app_home(){
    return view ('main/app_home');
 }

 public function app_news(){
    return view ('main/app_news');
 }

 public function app_tvshows(){
    return view ('main/app_tvshows');
 }

 public function app_contact(){
    return view ('main/app_contact');
 }


 public function app_download(){
   $filepath='public/GtnTv.apk';
   return $this->response->download($filepath, null);
}


}
