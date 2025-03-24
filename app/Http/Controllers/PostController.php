<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\store;

class PostController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();

        return view('posts.index', compact('products'));
    }

    public function show($id)
    {

        $products = Product::find($id);

        return view('posts.show', compact('products'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);

        $vendor = new Product();
        $vendor->title = $request->input('title');
        $vendor->content = $request->input('content');
        $vendor->save();

        return redirect("/posts/create");
    }
}
