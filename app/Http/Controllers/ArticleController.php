<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class ArticleController extends Controller
{

    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        $email = '';
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $email = $author->email;
        }

        return view('article', [
            "title" => "All Article". $title,
            "email" => $email,
            "active" => 'articles',
            // "articles" => Article::all(),
            "articles" => Article::latest()->filter(request(['search','category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function content(Article $article){
        return view('content', [
            "article" => $article,
            "active" => 'articles',
        ]);
        
    }

}

