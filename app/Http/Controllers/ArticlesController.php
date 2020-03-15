<?php

namespace App\Http\Controllers;

use App\Models\Articles as ArticlesModel;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redis;


class ArticlesController extends BaseController
{
    public function all()
    {
        return ArticlesModel::all();
    }

    public function list()
    {
        $articles = ArticlesModel::all();
        return view('articles')->withArticles($articles);

    }

    public function show(ArticlesModel $article)
    {
        Redis::zadd('user.1.inProgress',1,$article->id);
        return view('article',compact('article'));
    }
}
