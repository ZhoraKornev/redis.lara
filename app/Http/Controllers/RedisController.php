<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Cache;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;

class RedisController extends BaseController
{
    /**
     * @var ArticlesController[]|Collection
     */
    private $articles;

    /**
     * RedisController constructor.
     */
    public function __construct()
    {
        $this->articles = new \App\Models\Articles();
    }

    /**
     * Show the application dashboard.
     *
     * @return ArticlesController[]|array|\Illuminate\Database\Eloquent\Collection
     * le
     */
    public function allArticles()
    {
//        return $this->articles->all();
        return Cache::remember('articles.all',60*60,function (){
            return $this->articles->all();
        });

//        return view('articles');
    }
}
