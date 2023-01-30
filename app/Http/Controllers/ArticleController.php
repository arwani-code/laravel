<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        DB::table('articles')->insert([
            'title' => $request->title,
            'body' => $request->body,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/articles/create');
    }

    public function edit($id)
    {
        return view('articles.edit', [
            'articles' => Db::table('articles')->find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $article = DB::table('articles')->find($id);
        dd($article);
    }
}
