<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //ここから追記
    public function add()
    {
        return view('admin.news.create');
    }
    public function create(Request $request)
    {
        // admin/news/createにリダイレクトする
        return redirect('admin/news/create');
    }    
}
