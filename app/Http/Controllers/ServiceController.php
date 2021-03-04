<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index()
    {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(4);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
    public function store(Request $request)
    {
        //Validating post
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create([
            'body' => $request->body
        ]);
        return back();
    //    dd('ok');
    }

    public function destroy(Post $post)
    {
        if (!$post->ownedBy(auth()->user())) {
            dd('ok');
        }
        $post->delete();
        return back();
        // dd('$post');
    }
}
