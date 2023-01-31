<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index', ['articles' => Article::get()]);
    }

    public function show($show)
    {

        $article = Article::find($show);
        abort_if(!$article, 404);

        return view('articles.show', ['article' => Article::find($show)]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        Article::create($attributes);

        return redirect('/articles/create');
    }

    public function edit($id)
    {
        return view('articles.edit', [
            'article' => Article::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $article = Article::where(
            'id', $id
        )->first();

        $article->update($attributes);

        return redirect("/articles/{$article->id}");
    }

    public function destroy($id)
    {
        Article::find($id)->delete($id);
        return back();
    }
}
