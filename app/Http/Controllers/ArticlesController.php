<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }
        else {
            $articles = Article::latest()->get();
        }

        // render a list of a resource.
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // show a single resource.
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        //show a view to create a new resource.
        return view ('articles.create');
    }

    public function store()
    {
        // persist or store a new resource.

        $validatedAttributes = $this->validateArticle();

        Article::create($validatedAttributes);

        return redirect(route('articles.index'));
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

        return redirect($article->path());
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
