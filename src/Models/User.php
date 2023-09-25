<?php
 namespace App\Models;

 Class User extends Model {
public static $table = "users";
public $id;
public $email;
public $password;

}