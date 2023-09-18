<?php

use App\Router;
use App\Controllers\PublicController;

Router::get('/', [PublicController::class,'home']);


Router::get('/about', [PublicController::class,'about']);
Router::get('/test', [PublicController::class,'test']);
Router::get('/test', [PublicController::class,'testAnswer']);