<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route :: get('/', [PostController :: class, 'index'])
    -> name('post.index');
Route :: get('/posts/create', [PostController :: class, 'create'])
    -> name('post.create');
Route :: post('/posts/create', [PostController :: class, 'store'])
    -> name('post.store');

Route :: get('/posts/{id}', [PostController :: class, 'show'])
    -> name('post.show');
