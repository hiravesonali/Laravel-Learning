<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // render a list of a resource.
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // show a single resource.
        //$article = Article::findOrFail($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        //show a view to create a new resource.
        //exa. after user click on submit form.
        return view ('articles.create');
    }

    public function store()
    {
        // persist or store a new resource.

        $validatedAttributes = $this->validateArticle();

        Article::create($validatedAttributes);

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // show a view to edit an existing resource.
        //exa. save customers details edit again in form.
        //$article = Article::find($id);

        return view('articles.edit', compact('article'));


    }

    public function update(Article $article)
    {
        //persist the edited resource.
        // or update the new data.

       $validatedAttributes = $this->validateArticle();

        $article->update($validatedAttributes);

        return redirect('/articles/'. $article->id);
    }


    public function destroy()
    {
        // delete the resource or user.
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
