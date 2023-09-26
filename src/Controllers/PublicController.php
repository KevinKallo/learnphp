<?php
namespace App\Controllers;


use App\Models\Article;


class PublicController {
    public function home(){
        $articles = Article ::all();
        view('home',compact('articles'));
    }
    public function about(){
        view('about');
    }
    public function test(){
        session_start();
        // setcookie('mycookie', 'tasty', time()+ 60+60+23+30,'','');
        // var_dump($_COOKIE);
        var_dump($_SESSION);
        $_SESSION['id']= 123;
    }
    public function testAnswer(){
        var_dump($_POST);
       


    }
}