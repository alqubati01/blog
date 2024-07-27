<?php

namespace App\Http\Controllers;

use App\Services\MarketService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class CategoryController extends Controller
{
    public function __construct(MarketService $marketService)
    {
//        $this->middleware('auth');

        parent::__construct($marketService);
    }

    public function showCategories(Request $request)
    {
        $categories = $this->marketService->getCategories();

        return view('categories.index')
            ->with([
                'categories' => $categories,
            ]);
    }

    public function showCategoryPosts(Request $request, $title, $id)
    {
        $categoryPosts = $this->marketService->getCategoryPosts($id);
        $category = $this->marketService->getCategory($id);

        $categoryPosts = $this->paginate($categoryPosts);

        if ($request->ajax()) {
            $view = view('categories.posts.data', compact('categoryPosts'))->render();

            return response()->json(['html' => $view]);
        }

        return view('categories.posts.index')
            ->with([
                'categoryPosts' => $categoryPosts,
                'category' => $category,
            ]);
    }

    public function paginate($items, $perPage = 15, $page = null, $options = ['path' => '/posts'])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
