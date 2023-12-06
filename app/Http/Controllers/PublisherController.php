<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        return Publisher::all();
    }

    public function create(Request $request){
        Publisher::create([
            'name_publisher'=>$request->post()['name_publisher']
        ]);
    }
}
