<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = (new News())->getByNews();
        return view('admin.pages.home', ['news' => $news]);
    }

    public function create(NewsRequest $request)
    {
        (new News())->createNews($request->all());
        return redirect()
            ->route('admin::news::index')
            ->with('success', __('validation.custom.attribute-name.data_saved') . '!');
    }

    public function update(NewsRequest $request)
    {
        (new News())->updateNews($request->all());
        return redirect()
            ->route('admin::news::index')
            ->with('success', __('validation.custom.attribute-name.data_changed') . '!');
    }

    public function delete(Request $request)
    {
        (new News())->deleteNews($request->all('id'));
        return redirect()
            ->route('admin::news::index')
            ->with('success', __('validation.custom.attribute-name.news_removed') . '!');
    }
}
