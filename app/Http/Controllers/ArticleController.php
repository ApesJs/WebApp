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

    public function edit($id)
    {
        $article = DB::table('articles')->find($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);
        $article = DB::table('articles')->where('id', $id)->first();
        DB::table('articles')->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect("/articles/{$article->id}");
    }

    public function delete($id){
        DB::table('articles')->delete($id);
        return back();
    }
}
