<?php

namespace App\Http\Controllers;

use App\Services\MarketService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class TagController extends Controller
{
    public function __construct(MarketService $marketService)
    {
//        $this->middleware('auth');

        parent::__construct($marketService);
    }

    public function showTags(Request $request)
    {
        $tags = $this->marketService->getTags();

        return view('tags.index')
            ->with([
                'tags' => $tags,
            ]);
    }

    public function showTagPosts(Request $request, $title, $id)
    {
        $tagPosts = $this->marketService->getTagPosts($id);
        $tag = $this->marketService->getTag($id);

        $tagPosts = $this->paginate($tagPosts);

        if ($request->ajax()) {
            $view = view('tags.posts.data', compact('tagPosts'))->render();

            return response()->json(['html' => $view]);
        }

        return view('tags.posts.index')
            ->with([
                'tagPosts' => $tagPosts,
                'tag' => $tag,
            ]);
    }

    public function paginate($items, $perPage = 15, $page = null, $options = ['path' => '/posts'])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
