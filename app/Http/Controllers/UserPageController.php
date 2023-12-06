<?php

namespace App\Http\Controllers;

use App\Models\UserPage;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function index(){
        return UserPage::all();
    }

    public function create(Request $request){
        UserPage::create([
            'admin'=>$request->post()['admin'],
            'nickname'=>$request->post()['nickname'],
            'login'=>$request->post()['login'],
            'password'=>$request->post()['password'],
            'avatar'=>$request->post()['avatar']
        ]);
    }
}
