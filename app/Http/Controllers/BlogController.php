<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Article_tags;
use App\Models\CategorieBlog;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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

    public function index2()
    {
        $tags = Tags::all();
        $categories = CategorieBlog::all();
        $allarticles = Article::all();
        return view('back.pages.blog.index', compact('allarticles', 'categories', 'tags'));
    }


    public function create()
    {
        return view('back.pages.blog.create');
    }

    public function store(Request $request)
    {
        
        $store = new Article();
        $store->title = $request->title;
        $store->long_desc = $request->long_desc;
        $store->comments = $request->comments;
        $store->categorie_id = $request->categorie_id;
        $store->users_id = $request->users_id;

        if ($request->hasFile('src')) {
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/blog/', $filenametostore);
            $request->file('src')->storeAs('storage/blog/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/blog/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 780);
            $img->save();
            $store->src = $filenametostore;
        }

        $store->save();
        return redirect()->back();
    }


    public function show($id)
    {
        $show = Article::find($id);
        $categories = CategorieBlog::all();
        $tags = Tags::all();
        return view('back.pages.blog.show', compact('show', 'categories', 'tags'));
    }


    public function update(Request $request, $id)
    {
        $update = Article::find($id);
        $update->title = $request->title;
        $update->long_desc = $request->long_desc;
        $update->comments = $request->comments;
        $update->categorie_id = $request->categorie_id;
        $update->users_id = $request->users_id;

        if ($request->hasFile('src')) {
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/blog/', $filenametostore);
            $request->file('src')->storeAs('storage/blog/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/blog/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 780);
            $img->save();
            $update->src = $filenametostore;
        }

        $update->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = Article::find($id);
        Storage::delete('storage/blog/thumbnail/' . $todelete->src);
        Storage::delete('storage/blog/' . $todelete->src);
        $todelete->delete();
        return redirect()->back();
    }
}
