<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return to_route('articles.index');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return to_route('articles.show', $article);
    }

    public function delete(Article $article){
        $article->delete();
        return back();
    }
}
