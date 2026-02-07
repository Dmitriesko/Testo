<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        // TODO можно сделать еще пагинацию
        $posts = Post::query()->with('category')->get();
        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(PostStoreRequest $request): RedirectResponse
    {
        Post::query()->create([
            'title' => $request->validated('title'),
            'description' => $request->validated('description'),
            'content' => $request->validated('content'),
            'category_id' => $request->validated('category_id'),
        ]);

        return redirect()->route('posts.index');
    }
}
