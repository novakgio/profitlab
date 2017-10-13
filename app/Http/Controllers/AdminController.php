<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\News;
use App\Portfolio;
use App\Subscriber;
use App\User;
use Auth;
use App;
use App\Http\Requests;


class AdminController extends Controller
{
    


    
    public function indexPage(){
    	$portfolio = Portfolio::all()->count();
    	$blog = Blog::all()->count();
    	$new = News::all()->count();
    	$subscribers = Subscriber::all()->count();
    	return view('admin.index',compact('new','blog','portfolio','subscribers'));
    }

    public function loginPage(){
        if(Auth::user()){
            return $this->indexPage();
        }
    	return view('admin.login');
    }
    //this implementation is temporary,it doesn't take much at this point
    public function checkAdmin(Request $request){
    	$admin = User::where('name','=',$request->name)->where('password','=',$request->password)->first();
    	if($admin!=null){
    		Auth::login($admin);
    		return $this->indexPage();
    	}else{
    		return redirect('/');
    	}
    }

    public function logout(){
    	Auth::logout();
        return redirect('/');
    }

    public function subscribers(){
        $subscribers = Subscriber::get(['id','email']);
        return view('admin.subscribers',compact('subscribers'));
    }

    public function deleteSubscriber($id){
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();
        return back();
    }
}
