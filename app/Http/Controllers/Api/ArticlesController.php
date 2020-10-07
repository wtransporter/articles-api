<?php

namespace App\Http\Controllers\Api;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticlesStoreRequest;
use App\Http\Requests\ArticlesUpdateRequest;
use App\Http\Resources\Article as ArticleResource;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ArticleResource::collection(Article::paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ArticlesStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlesStoreRequest $request)
    {
        $article = new Article;

        $article->user_id = $request->user_id;
        $article->title = $request->title;
        $article->body = $request->body;

        if ($article->save()) {
            return new ArticleResource($article);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ArticlesApiFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ArticlesApiFormRequest $request)
    {
        $article = Article::findOrFail($request->input('article_id'));
        $article->update([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);

        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if ($article->delete()) {
            return new ArticleResource($article);
        }
    }
}
