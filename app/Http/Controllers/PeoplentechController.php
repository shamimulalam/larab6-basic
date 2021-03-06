<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function form(){
        return view('form');
    }
    public function preview(Request $request){
        $data = [];
        $data['name'] = $request->full_name;
        $data['email'] = $request->email_address;
        $data['phone'] = $request->phone_number;
        DB::table('about')->insert($data);
        return redirect()->route('show');
    }
    public function show(){
        $result = DB::table('about')->get();
        return view('preview',compact('result'));
    }
}
