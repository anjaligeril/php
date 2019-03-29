<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postsController extends Controller
{
    public function insertPost(){
        $title=$_GET['title'];
        $description=$_GET['descri'];
        $userId=Auth::user()->id;

        $post=new Post();

        $post->title=$title;
        $post->description=$description;
        $post->user_id=$userId;

        $post->save();
        echo 'insert data';
    }

    public function showPosts(){
        $allPosts=Post::with( 'user')->get();

        return view( 'welcome')->with ('posts',$allPosts);
    }

    public function show(){
        $postId=$_GET['id'];
        $singlePost=Post::find($postId);

       return view('showPost')->with ('post',$singlePost);
    }
    public function delete(){
        $postId=$_GET['id'];
        //echo $postId;
        //$singlePost=Post::find($postId);
        //$singlePost->delete();
        //$allPosts=Post::all();
        //return view( 'welcome')->with ('posts',$allPosts);
        Post::destroy($postId);
        return redirect()->back();
    }
    public function showUpdateView($post_id){
        $singlePost=Post::find($post_id);


        return view('update')->with ('post',$singlePost);
    }
    public function update($post_id){
        $title=$_POST['title'];
        $desc=$_POST['descri'];
        $selectedPost=Post::find($post_id);
        $selectedPost->title=$title;
        $selectedPost->description=$desc;
        $selectedPost->save();
        return redirect('/');
    }
}
