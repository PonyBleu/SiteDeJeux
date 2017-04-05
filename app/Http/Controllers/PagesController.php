<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function home(){
    return view('pages.accueil');
  }
  public function association(){
    return view('pages.association');
  }
  public function jeux(){
    return view('pages.jeux');
  }
  public function articles(){
    return view('pages.articles');
  }
  public function forum(){
    return view('pages.forum');
  }
  public function inscription(){
    return view('pages.inscription');
  }
  public function listejeux(){
    return view('pages.listejeux');
  }
//
}
