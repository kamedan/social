<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 25/09/2016
 * Time: 17:00
 */

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function postCreatePost(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);
        $post = new Post();
        $post->body = $request['body'];
        $message = 'There was an error';
        if($request->user()->posts()->save($post))
        {
            $message ='Post successfully created';
        }

        return redirect()->route('dashboard')->with(['message' => $message]);
    }
}