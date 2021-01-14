<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // A function inside a calss called a 'Method'
    public function index() {
        $title = 'Using Title Variable';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us parameter from about controller';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services from array of parameters',
            'services' => ['School Management System', 'Reports', 'Admission', 'Examinations']
        );
        return view('pages.services')->with($data);
    }
}