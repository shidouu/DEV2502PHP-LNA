<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function index()
   {
     $news = News::all();
    return view('news.index',['news'=>$news]);
   }

   public function create()
   {
        return view('news.create');
   }
   public function createPost(Request $request)
   {
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'status' => 'required|boolean',
    ]);

    $news = new News;
    $news->title = $request->title;
    $news->description = $request->description;
    $news->content = $request->content;
    $news->status = $request->status;
    $fileName = $request->title . '.' . $request->file('image')->extension();
    $imageUrl='images/';
    $request->file('image')->move(public_path('images\\'),$fileName);
    $news->image=$imageUrl.$fileName;

    $news->save();

    return back()->with('news_created','Thêm mới tin tức thành công');

   }
}
