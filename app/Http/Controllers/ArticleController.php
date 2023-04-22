<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $articles = DB::table('articles')->find($id);
        return view('articles.show', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        DB::table('articles')->insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect('/articles');
    }
}
