<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

      //  dd($article->published_at);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function  store()
    {
    //    $input = Request::all();

    //    $input['published_at'] = Carbon::now();

        Article::create(Request::all());
        return redirect('articles');
    }
}
