<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Session;

class BooksController extends Controller
{
    public function register_book_page(){
        if(Session::has('AdminloginId')){
            $data = User::where('id','=',Session::get('AdminloginId'))->first();
            return view('admin.books.register-book',compact('data'));
        }
        return view('login');
    }
    public function register_book(Request $request){
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'publication_date'=>'required',
            'description'=>'required|min:15|max:200',
            'price'=>'required',
            'image'=>'required',

        ]);
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publication_date = $request->publication_date;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->cover_image = $request->image;
        $res = $book->save();
        if($res){
            return back()->with('success','Book registered successfully');
        }
        else{
            return back()->with('fail','something wrong happen.Try later');
        }
    }
    public function show_books(){
        if(Session::has('AdminloginId')){
            $data = User::where('id','=',Session::get('AdminloginId'))->first();
            $books = Book::all();
            return view('admin.books.show-book',compact('data','books'));
        }
        return view('login');
    }
    public function edit_book($id){
        if(Session::has('AdminloginId')){
            $data = User::where('id','=',Session::get('AdminloginId'))->first();
            $book_data = Book::where('id','=',$id)->first();
            return view('admin.books.edit-book',compact('data','book_data'));
        }
        return view('login');

    }
    public function update_book(Request $request){
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'publication_date'=>'required',
            'description'=>'required|min:15|max:200',
            'price'=>'required',
            'image'=>'required',

        ]);
        $id = $request->id;
        $title = $request->title;
        $author = $request->author;
        $publication_date = $request->publication_date;
        $description = $request->description;
        $price = $request->price;
        $cover_image = $request->image;
        $res = Book::where('id','=',$id)->update([
            'id'=>$id,
            'title'=>$title,
            'author'=>$author,
            'publication_date'=>$publication_date,
            'description'=>$description,
            'price'=>$price,
            'cover_image'=>$cover_image
        ]);
        if($res){
            return back()->with('success','Book updated successfully');
        }
        else{
            return back()->with('fail','something wrong happen.Try later');
        }

    }
    public function delete_book($id){

        $res = Book::where('id','=',$id)->delete();
        if($res){
            return back()->with('success','Book deleted successfully');
        }
        else{
            return back()->with('fail','something wrong happen.Try later');
        }

    }
}
