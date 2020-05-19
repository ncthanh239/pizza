<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category_Post;
use App\Category;

/**
 * 
 */
class PostService
{
	/**
	 * [postList description]
	 * @return [type] [return post list]
	 * add info columns to return post list 
	 */
	public function postList()
	{ 
		// join posts vs category_posts
		$postList = Post::all();
		if ($postList) {
			foreach ($postList as $key => $value) {
				$posts[$key] = Post::where('id',$value->id)->first();
				//add category column
				$category[$value->id] = Category_Post::where('post_id', $value->id)->get('category_id');
				$colName = "category_name";
				$this->addCategoryCol($posts[$key], $colName, $category, $category[$value->id]);
			}
			return $posts;
		}else {
			return null;
		}
	}

	/**
	 * [addCategoryCol description]
	 * Add column category title to $object from an array value ($arr) by away :
	 * + Add once value and concatenation it be a chain in sub array ($subArr) into $object[$colName] via tow loops foreach
	 * @param  [type] $boject [object to set value from array ]
	 * @param  [type] $colName [Column name insert value ]
	 * @param  [type] $arr [Array containing sub arrays ]
	 * @param  [type] $subArr [Sub Array containing values to concatenate and insert Object[colName] ]
	 * @return Object[colName] contain values are inserted from array
	 */
	public function addCategoryCol($object, $colName, $arr, $subArr)
	{
		foreach ($arr as $key => $value) {
			$list = "";
			foreach ($subArr as $key1 => $value1) {
				$item = Category::where('id', $value1->category_id)->value('title');
				$list == "" ? $list = $list.$item : $list = $list.", ".$item;
			}
			$object[$colName] = $list;
		}
	}

	public function blogList(){
		$data = array();
		$paginate = 6;
		$take = 4;
		$data['posts'] = Post::paginate($paginate);
		$data['newPost'] = Post::OrderBy('id','desc')->take($take)->get();
		return $data;
	}

	public function blogDetail($id)	{
		$post = Post::find($id);
		if ( $post != null) {
			return $post;
		}
		else{
			return null;
		}
	}
}