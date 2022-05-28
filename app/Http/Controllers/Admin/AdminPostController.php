<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\SubCategory;

class AdminPostController extends Controller
{
    public function show(){
      $posts = Post::get();
      return view('admin.post_show', compact('posts'));
    }

    public function create(){

      $sub_categories = SubCategory::with('rCategory')->get();
      // foreach($sub_categories as $item){
      //   echo $item->sub_category_name.' - '.$item->rCategory->category_name.'<br>';
      // }
      
      return view('admin.post_create', compact('sub_categories'));
    }
}