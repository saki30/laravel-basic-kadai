<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller 
{
    public function index() {
        $products = DB::table('products')->get();

        return view('posts.index',compact('products'));
    }   

    public function show($id) {
      
        $products = Product::find($id);

        return view('posts.show', compact('products'));
    }
}
