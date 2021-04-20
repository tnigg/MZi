<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::all();
        
        return view('news.index', compact('news'));
    }

    public function create() {
        return view('news.create');
    }

    public function store(Request $request) {
        News::create([
            'title' => $request['title'],
            'slug' => $request['title'],
            'text' => $request['text'],           
        ]);        
    }

    public function edit($news) {                        
        return view('news.edit', compact('news'));
    }

    public function delete($id) {
        $news = News::findOrFail($id)->delete();        
        return "deleted";
    }
}
