<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Article;
use App\Models\CategorieBlog;
use App\Models\Tags;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    public function index()
    {
        $tags = Tags::all();
        // $categories = CategorieBlog::all();
        $categories = CategorieBlog::withCount('articles')->get(); //compte le nombre de categories + renvoie les infos
        $articles = Article::all();
        return view('front.pages.blog', ['articles' => Article::paginate(5)], compact('tags', 'categories', 'articles'));
    }


    public function create()
    {
        //
    }

    public function store(StoreBlogRequest $request)
    {
        //
    }


    public function show(Blog $blog)
    {
        //
    }

    public function edit(Blog $blog)
    {
        //
    }


    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    public function destroy(Blog $blog)
    {
        //
    }
}
