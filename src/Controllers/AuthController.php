<?php
namespace App\Controllers;

use App\Models\User;

class AuthController {
    public function register(){
       
        if($_POST['password'] == $_POST ['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password =password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
            header('Location: /login');
        }else{
            header('Location: /register');
        }
       
    }

    public function registerForm(){
        view('auth/register');
    }

    public function login(){
        
    }

    public function loginForm(){
        view('auth/login');
    }
}