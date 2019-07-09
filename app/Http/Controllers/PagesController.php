<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $index ='WELCOME TO LARAVEL';
        //return view('pages.index',compact('index',$index));
        return view('pages.index')->with('index',$index);
    }
    public function about() {
        $about ='About Us';
       return view('pages.about',compact('about'));
    }
    public function services() {
        $data = array(
            'title' =>'Services',
            'services'=> ['Web Design','Programming','SEO']
        );
       return view('pages.services')->with($data);
    }

}
