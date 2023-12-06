<?php

namespace App\Http\Controllers;

use App\Models\MagazinePage;
use Illuminate\Http\Request;

class MagazinePageController extends Controller
{
    public function create(Request $request){
        MagazinePage::create([
            'name' => $request->post()['name'],
            'publication_date' => $request->post()['publication_date'],
            'description' => $request->post()['description'],
            'price' => $request->post()['price'],
            'picture' => $request->post()['picture'],
            'genres_id' => $request->post()['genres_id'],
            'publishers_id' => $request->post()['publishers_id']

        ]);
    }

    public function index(){
        return view('MagazinePage', ['games' => MagazinePage::all()]);
    }
}
