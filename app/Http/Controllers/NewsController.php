<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('dashboard.addnews');
    }

    public function insert(Request $request){
        
        $imageOriginalName = $request->file('avatarImageUpload')->getClientOriginalName();

        $request->file('avatarImageUpload')->storeAs('/public/frontend/src/images',$imageOriginalName);
        $news = new News();
        $news->news_image = $imageOriginalName;
        $news->news_title = $request->newsTitle;
        $news->news_date = $request->newsDate;
        $news->news_description = $request->newsDiscription;
        $news->save();
        return redirect()->back()->with('flash_back',"Added Sucessfully");
    
    }
}
