<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Session;

class UserController extends Controller
{
    public function dashboard(){
        if(Session::has('UserloginId')){
            $data = User::where('id','=',Session::get('UserloginId'))->first();
            $books = Book::all();
            return view('user.dashboard',compact('data','books'));
        }
        return view('login');
    }
    public function book_desc($id){
        if(Session::has('UserloginId')){
            $data = User::where('id','=',Session::get('UserloginId'))->first();
            $book = Book::where('id','=',$id)->first();
            return view('user.book.show-book-desc',compact('data','book'));
        }
        return view('login');
    }

}
