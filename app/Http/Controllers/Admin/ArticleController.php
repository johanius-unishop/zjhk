<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StoreArticleRequest;
use App\Http\Requests\Admin\UpdateArticleRequest;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.article.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $record = Article::create($input);
        session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.article.index'));
        }
        return redirect(route('admin.article.edit', $record->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.article.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $article->update($input);

        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.article.index'));
        }
        return redirect(route('admin.article.edit', $article->id));
    }


}
