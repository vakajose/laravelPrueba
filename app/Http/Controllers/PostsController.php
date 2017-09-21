<?php

namespace sisCRM\Http\Controllers;

use sisCRM\post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    public function index()
    {
    	
    	$posts =post::all();
		return view('posts.index')->with(['posts'=>$posts]);
	}

	public function show($postId)
	{
		//dd($post);

		$post = post::find($postId);

		return view('posts.show') -> with(['post'=>$post]);
	
	}

}