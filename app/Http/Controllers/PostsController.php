<?php

namespace sisCRM\Http\Controllers;

use sisCRM\post;
use Illuminate\Http\Request;
use sisCRM\Http\Requests\CreatePostRequest;


class PostsController extends Controller
{
    //

    public function index()
    {
    	
    //	$posts =post::all();

		$posts =post::orderBy('id','desc')->get();

		return view('posts.index')->with(['posts'=>$posts]);
	}

	public function show($postId)
	{
		//dd($post);

		$post = post::find($postId);

		return view('posts.show') -> with(['post'=>$post]);
	
	}


	public function create()
	{
		return view('posts.create');
	}

	public function store(CreatePostRequest $request)
	{
	

	/*	
		$this->validate($request, [
			 ]);
			
		dd($request->all());

	*/
/*
		$post = new post;
		$post->title = $request->get('title');
		$post->description = $request->get('description');
		$post->url = $request->get('url');
		$post->save();
*/
		$post = post::create($request->only('title','description','url'));

		 return redirect()->route('posts_path');


	}

}