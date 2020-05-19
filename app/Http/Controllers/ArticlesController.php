<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {

        // render a list of a resource.

        $articles = Article::latest()->get();
        
        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id) {

        // show a single resource.

        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);

    }
    
    public function create(){

        //show a view to create a new resource. 
        //exa. after user click on submit form.

        return view ('articles.create');

    }

    public function store(){

        // persist or store a new resource.
       
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function edit(){

        // show a view to edit an existing resource.
        //exa. save cutomer details edit again in form.
    }

    public function update(){

        //persist the edited resource.
        // or update the new data.


    }

    public function destroy(){


        // delete the resource or user.
    }
}

