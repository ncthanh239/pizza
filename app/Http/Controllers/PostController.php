<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\PostService;

class PostController extends Controller
{
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function view()
    {
        $posts = $this->postService->postList();
        return view('pages.viewPost')->with(compact('posts'));
    }

    public function blog(){
    	$blogs = $this->postService->blogList();
    	return view('store.blog')->with(compact('blogs'));
    }

    public function show($id){
    	$post = $this->postService->blogDetail($id);
    	if($post !=null){
    		$data = $this->postService->blogList();
			return view('store.post-detail')->with(compact('data'))->with(compact('post'));
    	}
    	else{
    		return view('store.404');
    	}
    }
}
