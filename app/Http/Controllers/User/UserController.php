<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    public function settings(){
        if(Session::has('UserloginId')){
            $data = User::where('id','=',Session::get('UserloginId'))->first();
            return view('user.updatepw',compact('data'));
        }
        return view('login');
    }
    public function update_pw(Request $request){
        $request->validate([
            'oldpassword'=>'required',
            'password'=>'sometimes|confirmed',

        ]);
        $user = User::where('id', '=', Session::get('UserloginId'))->first();

        if(Hash::check($request->oldpassword,$user->password)){
            $res = User::where('id','=',$user->id)->update([
                'password'=>Hash::make($request->password)
            ]);
            if($res){
                return back()->with('success','Password updated successfully');
            }
        }
        else{
            return back()->with('fail','something wrong happen.Try later');
        }
    }
    public function search(){
        if(Session::has('UserloginId')){
            if (request()->input('search')) {
                $books = Book::where('title', 'LIKE', '%' . request()->input('search') . '%')
                    ->orwhere('description', 'LIKE', '%' . request()->input('search') . '%')->get();
            } else {
                $books = Book::all();
            }
            $data = User::where('id','=',Session::get('UserloginId'))->first();
            return view('user.dashboard', [
                'books' => $books,
                'data' => $data
            ]);
        }
        return view('login');
    }

}
