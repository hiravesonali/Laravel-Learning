<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // public function getRouteKeyName()
    // {
    //  return 'slug';  // Article::where('slug', $article)
    // }

    protected $fillable = ['title', 'excerpt', 'body'];  //first method for protect

     // protected $guarded = [];

     public function path()
     {
        return route('articles.show', $this);
     }

     public function user()
     {
        return $this->belongsTo(user::class);
     }

     public function tags()
     {
         return $this->belongsToMany(Tag::class);
     }

}
