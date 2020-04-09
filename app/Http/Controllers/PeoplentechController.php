<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeoplentechController extends Controller
{
    public function index(){
        $title = 'PNT Home';
        return view('peoplentechView',compact('title'));
    }
    public function about()
    {
        $title = 'About PNT';
        $details = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi commodi eius est eveniet explicabo hic ipsam iure laborum minima nobis quia quod ratione reiciendis, tempora unde ut veritatis vitae.';
        return view('about',compact('title','details'));
    }
}
