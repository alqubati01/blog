<?php

namespace App\Http\Controllers;

use App\Services\MarketService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    public function __construct(MarketService $marketService)
    {
//        $this->middleware('auth');

        parent::__construct($marketService);
    }

    public function showPosts(Request $request)
    {
        $posts = $this->marketService->getPosts();

        $posts = $this->paginate($posts);

        if ($request->ajax()) {
            $view = view('posts.data', compact('posts'))->render();

            return response()->json(['html' => $view]);
        }

        return view('posts.posts')
            ->with([
                'posts' => $posts,
            ]);
    }

    public function showPost($id)
    {
        $post = $this->marketService->getPost($id);

        $relatedPosts = $this->marketService->getPosts();
        $postsCount = collect($relatedPosts)->count();
        $relatedPosts = collect($relatedPosts)->sortBy('created_at')->splice(1, 6);

        if ($id == 1) {
            $postOlder = $this->marketService->getPost($id);
        } else {
            $postOlder = $this->marketService->getPost($id - 1);
        }

        if ($id == $postsCount) {
            $postNewer = $this->marketService->getPost($id);
        } else {
            $postNewer = $this->marketService->getPost($id + 1);
        }

        return view('posts.show')
            ->with([
                'post' => $post,
                'postNewer' => $postNewer,
                'postOlder' => $postOlder,
                'relatedPosts' => $relatedPosts,
            ]);
    }

    public function paginate($items, $perPage = 15, $page = null, $options = ['path' => '/posts'])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
