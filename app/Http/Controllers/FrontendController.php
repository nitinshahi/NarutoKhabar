<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $news = News::all()->take(6);
        return view('index', ['news' => $news]);
    }
}
