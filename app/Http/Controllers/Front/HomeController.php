<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\HomeAdvertisement;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Post;
use App\Models\SubCategory;

class HomeController extends Controller
{
    public function index(){
      $home_ad_data = HomeAdvertisement::where('id', 1)->first();
      $setting_data = Setting::where('id', 1)->first();

      $post_data = Post::with('rSubCategory')->orderBy('id', 'desc')->get();
      $sub_category_data = SubCategory::with('rPost')->orderBy('sub_category_order','asc')->where('show_on_home', 'Show')->get();

      return view('front.home', compact('home_ad_data', 'setting_data', 'post_data', 'sub_category_data'));
    }
}