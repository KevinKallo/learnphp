<?php

//var_dump($_SERVER);
switch($_SERVER['REQUEST_URI']){
    case '/':
        echo'Home Page';
        break;
    case '/about':
        echo'About Page';
        break;
    default:
        echo'404';
}