<?php

namespace App\Http\Controllers;

use App\Models\newspage;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    public function index(){
        return NewsPage::all();
    }

    public function create(Request $request){
        NewsPage::create([
            'magazine_pages_id'=>$request->post()['magazine_pages_id']
        ]);
    }
}
