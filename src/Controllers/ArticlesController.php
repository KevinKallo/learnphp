<?php

namespace App\Controllers;
use App\Models\Article;


class ArticlesController {
    public function index(){
        $articles = Article::all();
        view('articles/index',compact('articles'));
    }
    public function create(){
        view('articles/create');
    }
    public function store(){

        $article = new Article();
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->save();

    }
        
    }
