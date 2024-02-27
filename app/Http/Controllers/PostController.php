<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Post;

class PostController extends Controller
{

    public function index() {

        $posts = Post :: all();

        return view('pages.post.index', compact('posts'));
    }
    public function show($id) {

        $post = Post :: find($id);

        return view('pages.post.show', compact('post'));
    }
    public function create() {

        return view('pages.post.create');
    }
    public function store(Request $request) {

        $data = $request -> all();

        $img = $data['image'];
        $img_path = Storage :: disk('public')
            -> put('images', $img);
        // dd($img, $img_path);

        $post = new Post();

        $post -> title = $data['title'];
        $post -> text = $data['text'];
        $post -> image = $img_path;

        $post -> save();

        return redirect() -> route('post.show', $post -> id);
    }
}
