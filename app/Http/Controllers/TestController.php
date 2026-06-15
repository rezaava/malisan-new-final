<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class TestController extends Controller
{
    //
    public function test(){
        $user=new User();
        $user->name='q';
        $user->family='w';
        $user->mobile='123';
        $user->password='1';
        $user->save();
        $user->addRole('admin');
    }
    public function check(){
        $user=User::find(3);
        if($user->hasRole('admin')){
            return "adminam";
        }else{
            return "useram";
        }
    }
    public function check2(){
        $user=User::find(3);
        return view('index',compact('user'));
    }

    public function login(){
        $user=User::find(3);
        Auth::login($user);
        
    }

    
    public function checkLogin(){
        return "ok";
    }

}
