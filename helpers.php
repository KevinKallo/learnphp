<?php

function view($viewName, $wars = []){
    extract($wars);
    include __DIR__ . "/views/$viewName.php";
}