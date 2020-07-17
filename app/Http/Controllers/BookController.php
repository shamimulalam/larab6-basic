<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    #ORM = Object Relational Mapper/Mapping
    public function index(){
        $data=[];
//        $data['books'] = DB::table('books')->get();
        $data['books'] = Book::all();
        return view('book.index',$data);
    }
    public function create(){
        return view('book.create');
    }
    public function store(Request $request){
        /*$data['name'] = $request->name;
        $data['author_name'] = $request->author_name;
        $data['publish_date'] = $request->publish_date;
        DB::table('books')->insert($data);*/

        $book = new Book();
        $book->name = $request->name;
        $book->author_name = $request->author_name;
        $book->publish_date = $request->publish_date;
        $book->save();
        return redirect()->route('book.index');
    }
    public function edit($id){
//        $data['book'] = DB::table('books')->find($id);
        $data['book'] = Book::find($id);
        return view('book.edit',$data);
    }

    public function update(Request $request,$id){
        /*$data['name'] = $request->name;
        $data['author_name'] = $request->author_name;
        $data['publish_date'] = $request->publish_date;
        DB::table('books')->where('id',$id)->update($data);*/
        $book = Book::find($id);
        $book->name = $request->name;
        $book->author_name = $request->author_name;
        $book->publish_date = $request->publish_date;
        $book->save();
        return redirect()->route('book.index');
    }
    public function delete($id){
//        DB::table('books')->where('id',$id)->delete();
        Book::destroy($id);
        return redirect()->route('book.index');
    }
}
