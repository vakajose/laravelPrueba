<?php

namespace sisCRM\Http\Controllers;

use sisCRM\post;
use Illuminate\Http\Request;
use sisCRM\Http\Requests\CreatePostRequest;
use sisCRM\Http\Requests\UpdatePostRequest;

class PostsController extends Controller
{
    //

    public function index()
    {
    	
    //	$posts =post::all();

		//$posts =post::orderBy('id','desc')->get();

		$posts =post::orderBy('id','desc')->paginate(10);

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

	public function edit(post $post)
	{

		return view('posts.edit')->with(['post'=>$post]);
	}

	public function update(post $post, UpdatePostRequest $request)
	{
		/*
		$post->title = $request->get('title');
		$post->description = $request->get('description');
		$post->url = $request->get('url');
		$post->save();
		*/

		$post->update(
			$request->only('title', 'description','url')
		);
		
		return redirect()->route('post_path',['post'=> $post->id]);
	}

	public function delete(post $post)
	{
		$post->delete();
		return redirect()->route('posts_path');

	}

}