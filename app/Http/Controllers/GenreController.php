<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        return Genre::all();
    }

    public function create(Request $request){
        Genre::create([
            'name_genre'=>$request->post()['name_genre']
        ]);
    }
}
