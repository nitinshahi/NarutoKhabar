<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function create(){
        $news = News::all();
        return view('dashboard.addnews', compact('news'));
    }

    public function insert(Request $request){
        $request->validate([
            'avatarImageUpload' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'newsTitle' => 'required',
            'newsDate' => 'required',
            'newsDiscription' => 'required',
        ]);
        
        $imageOriginalName = $request->file('avatarImageUpload')->getClientOriginalName();

        $request->file('avatarImageUpload')->storeAs('public/uploads/images',$imageOriginalName);
        $news = new News();
        $news->news_image = $imageOriginalName;
        $news->news_title = $request->newsTitle;
        $news->news_date = $request->newsDate;
        $news->news_description = $request->newsDiscription;
        $news->save();
        // dd($request->all());
        return redirect()->back()->with('flash_back',"Added Sucessfully!!");
    
    }

    public function index(){
        $news = News::all();
        return view('dashboard.shownews', compact('news'));
    }
    public function edit(News $news){
        return view('dashboard.editnews', compact('news'));
    }

    public function update(News $news,Request $request){

        if($request->hasfile('avatarImageUpload')){

            Storage::delete('/public/uploads/images/'.$news->news_image);
            $imageOriginalName = $request->file('avatarImageUpload')->getClientOriginalName();
            $request->file('avatarImageUpload')->storeAS('public/uploads/images',$imageOriginalName);

            $news->news_image = $imageOriginalName;
            $news->news_title = $request->newsTitle;
            $news->news_date = $request->newsDate;
            $news->news_description = $request->newsDiscription;
            $news->update();
    
            return redirect(route('addnews.index'));
        }
        else{
            echo 'doesnt have file';
        }
    }

    public function destroy(News $news, Request $request){
        // dd($request);
        Storage::delete('/public/uploads/images/'.$news->news_image);
        $news->delete();
        return redirect(route('addnews.index'))->with('flash_back',"Deleted Sucessfully!!");
        
    }
}
