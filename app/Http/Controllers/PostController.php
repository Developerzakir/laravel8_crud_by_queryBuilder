<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    }

    public function addNewPost(Request $request)
    {
        DB::table('posts')->insert([
            'title' =>$request->title,
            'body' =>$request->body

        ]);

        return redirect('/posts')->with('post_created', 'Post has been created successfully');

    }

    public function showpost()
    {
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));

    }

    public function showpostbyId($id)
    {
        $posts = DB::table('posts')->where('id',$id)->first();
        return view('single-post', compact('posts'));

    }

    public function deletePost($id)
    {
        $posts = DB::table('posts')->where('id', $id)->delete();

        return back()->with('delete_post', 'Post has been deleted successfully');
    }

    public function editPost($id)
    {
        $posts = DB::table('posts')->where('id', $id)->first();
        return view('edit', compact('posts'));
    }

    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update([
            'title' =>$request->title,
            'body' =>$request->body

        ]);

        return redirect('/posts')->with('update_post', 'Post Updated successfully!');
    }
}
