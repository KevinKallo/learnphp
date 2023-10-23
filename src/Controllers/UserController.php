<?php

namespace App\Controllers;

use App\Models\User;

class UserController {
    public function index(){
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function create(){
        view('users/create');
    }

    public function store(){
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = $_POST['passw0rd'];
        $user->save();
        header('Location: /admin/users');
    }

    public function show(){
        $id = $_GET['id'];
        $user = User::find($id);
        //view('articles/view', ['article' => $article]);

        view('users/view', compact('user'));
    }

    public function edit(){
        $id = $_GET['id'];
        $user = User::find($id);
        view('users/edit', compact('user'));
    }

    public function update() {
        $id = $_GET['id'];
        $user = User::find($id);
        $user->email = $_POST['email'];

        // Check if a new password is provided
        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        }

        $user->save();
        header('Location: /admin/users');
    }
    public function delete(){
        $id = $_GET['id'];
        $user = User::find($id);
        $user->delete();
        header('Location: /admin/users');
    }
}