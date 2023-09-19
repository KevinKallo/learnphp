<?php

use App\Router;
use App\Controllers\ArticlesController;
use App\Controllers\PublicController;


Router::get('/', [PublicController::class,'home']);
Router::get('/about', [PublicController::class,'about']);
Router::get('/test', [PublicController::class,'test']);
Router::get('/test', [PublicController::class,'testAnswer']);

Router::get('/admin/articles', [ArticlesController::class,'index']);
Router::get('/admin/articles/new', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);