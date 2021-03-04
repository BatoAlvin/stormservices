<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ServiceLikeController extends Controller
{
    
    public function store(Post $post, Request $request)
    {

        //To make a user subscribe once
        if ($post->likedBy($request->user()))
        {
            return response('page not found');
        }
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);
        // dd($post);
 
return back();
    }
    public function destroy(Post $post, Request $request)
    {
        // dd('$post');
 $request->user()->likes()->where('post_id', $post->id)->delete();
return back();
    }
}
