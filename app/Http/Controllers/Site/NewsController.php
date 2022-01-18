<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = (new News())->getByNews();
        return view('site.pages.home', ['news' => $news]);
    }

    public function newsCard(int $id)
    {
        $news = (new News())->getByNewsId($id);

        if (empty($news)) abort(404);

        return view('site.pages.card ', ['news' => $news]);
    }

    public function list($id)
    {
        $news = (new News())->getByCategoryId($id);
        return view('site.pages.list ', ['news' => $news, 'id' => $id]);
    }
}
