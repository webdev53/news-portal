<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TopAdvertisement;
use App\Models\HomeAdvertisement;
use App\Http\Controllers\Controller;

class AdminAdvertisementController extends Controller
{
  public function home_ad_show(){
      $home_ad_data = HomeAdvertisement::where('id', 1)->first();
      return view('admin.advertisement_home_view', compact('home_ad_data'));
    }

    public function home_ad_update(Request $request){
      $home_ad_data = HomeAdvertisement::where('id', 1)->first();

      //above search -1
      if($request->hasFile('above_search_ad_one')){
      $request->validate([
      'above_search_ad_one' => 'image|mimes:jpg,jpeg,png,gif'    
    ]);

    unlink(public_path('uploads/'.$home_ad_data->above_search_ad_one));

    $ext = $request->file('above_search_ad_one')->extension();
    $final_name = 'search_one'.'.'.$ext;

    $request->file('above_search_ad_one')->move(public_path('uploads/'), $final_name);
    $home_ad_data->above_search_ad_one = $final_name;

    }

    //above search -2
      if($request->hasFile('above_search_ad_two')){
      $request->validate([
      'above_search_ad_two' => 'image|mimes:jpg,jpeg,png,gif'    
    ]);

    unlink(public_path('uploads/'.$home_ad_data->above_search_ad_two));

    $ext = $request->file('above_search_ad_two')->extension();
    $final_name = 'search_two'.'.'.$ext;

    $request->file('above_search_ad_two')->move(public_path('uploads/'), $final_name);
    $home_ad_data->above_search_ad_two = $final_name;

    }
      //above footer -1
      if($request->hasFile('above_footer_ad_one')){
      $request->validate([
      'above_footer_ad_one' => 'image|mimes:jpg,jpeg,png,gif'    
    ]);

    unlink(public_path('uploads/'.$home_ad_data->above_footer_ad_one));

    $ext = $request->file('above_footer_ad_one')->extension();
    $final_name = 'footer_one'.'.'.$ext;

    $request->file('above_footer_ad_one')->move(public_path('uploads/'), $final_name);
    $home_ad_data->above_footer_ad_one = $final_name;

    }

    //above footer -2
      if($request->hasFile('above_footer_ad_two')){
      $request->validate([
      'above_footer_ad_two' => 'image|mimes:jpg,jpeg,png,gif'    
    ]);

    unlink(public_path('uploads/'.$home_ad_data->above_footer_ad_two));

    $ext = $request->file('above_footer_ad_two')->extension();
    $final_name = 'footer_two'.'.'.$ext;

    $request->file('above_footer_ad_two')->move(public_path('uploads/'), $final_name);
    $home_ad_data->above_footer_ad_two = $final_name;

    }

      $home_ad_data->above_search_ad_one_url = $request->above_search_ad_one_url;
      $home_ad_data->above_search_ad_two_url = $request->above_search_ad_two_url;
      $home_ad_data->above_search_ad_one_status = $request->above_search_ad_one_status;
      $home_ad_data->above_search_ad_two_status = $request->above_search_ad_two_status;

      $home_ad_data->above_footer_ad_one_url = $request->above_footer_ad_one_url;
      $home_ad_data->above_footer_ad_two_url = $request->above_footer_ad_two_url;
      $home_ad_data->above_footer_ad_one_status = $request->above_footer_ad_one_status;
      $home_ad_data->above_footer_ad_two_status = $request->above_footer_ad_two_status;

      $home_ad_data->update();

      return redirect()->back()->with('success', 'Data is updated successfully');
    }

    // top ad show
    public function top_ad_show(){
      $top_ad_data = TopAdvertisement::where('id', 1)->first();
      return view('admin.advertisement_top_view', compact('top_ad_data'));
    }

    // top ad update
    public function top_ad_update(Request $request){
      $top_ad_data = TopAdvertisement::where('id', 1)->first();

      //above search -1
      if($request->hasFile('top_ad_one')){
      $request->validate([
      'top_ad_one' => 'image|mimes:jpg,jpeg,png,gif'    
    ]);

    unlink(public_path('uploads/'.$top_ad_data->top_ad_one));

    $ext = $request->file('top_ad_one')->extension();
    $final_name = 'top_1'.'.'.$ext;

    $request->file('top_ad_one')->move(public_path('uploads/'), $final_name);
    $top_ad_data->top_ad_one = $final_name;

    }

    //above search -2
      if($request->hasFile('top_ad_two')){
      $request->validate([
      'top_ad_two' => 'image|mimes:jpg,jpeg,png,gif'    
    ]);

    unlink(public_path('uploads/'.$top_ad_data->top_ad_two));

    $ext = $request->file('top_ad_two')->extension();
    $final_name = 'top_2'.'.'.$ext;

    $request->file('top_ad_two')->move(public_path('uploads/'), $final_name);
    $top_ad_data->top_ad_two = $final_name;
    }

      $top_ad_data->top_ad_one_url = $request->top_ad_one_url;
      $top_ad_data->top_ad_two_url = $request->top_ad_two_url;
      $top_ad_data->top_ad_one_status = $request->top_ad_one_status;
      $top_ad_data->top_ad_two_status = $request->top_ad_two_status;

      $top_ad_data->update();

      return redirect()->back()->with('success', 'Data is updated successfully');
    }
}