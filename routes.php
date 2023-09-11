<?php

use App\Router;
use App\Controllers\PublicController;

Router::addRoute('/', [PublicController::class,'home']);


Router::addRoute('/about', [PublicController::class,'about']);