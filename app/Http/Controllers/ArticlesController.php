<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {

        $articles = Article::latest()->get();
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

    public function store(ArticleRequest $request){
        // Validation

        Article::create($request->all());
        return redirect('articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }


}
