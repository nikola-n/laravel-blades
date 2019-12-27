<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
      $data= [
          'title'=> 'Clean Blog',
          'small'=>'A Blog Theme By Start Bootstrap',
          'backgroundPhoto'=>'img/home-bg.jpg'
      ];
      return view('index',$data);
  }
  public function aboutme()
  {
    $data= [
        'title'=> 'About Me',
        'small'=>'This is what i do.',
        'backgroundPhoto'=>'img/about-bg.jpg'

    ];
      return view('aboutme',$data);
  }
  public function contact()
  {
    $data= [
        'title'=> 'Contact Me',
        'small'=>'Have questions? I have answers!',
        'backgroundPhoto'=>'img/contact-bg.jpg'
    ];
      return view('contact',$data);
  }
  public function sample()
  {
      $data = [
        'title' =>'Man must explore, and this is exploration at it`s greatest',
        'small'=>'Problems look mightly small from 150 miles up',
        'subtitle'=>'Posted by Start Bootstrap on August 24, 2018',
        'backgroundPhoto'=>'img/post-bg.jpg'
      ];
      return view('sample',$data);
  }
}
