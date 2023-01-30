<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index', ['articles' => DB::table('articles')->get()]);
    }

    public function show($show)
    {
        return view('articles.show', ['article' => Db::table('articles')->find($show)]);
    }
}
