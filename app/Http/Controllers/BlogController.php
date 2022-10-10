<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Article_tags;
use App\Models\CategorieBlog;
use App\Models\Comments;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{

    public function index()
    {
        $tags = Tags::all();
        $articles = Article::all();
        // $categories = CategorieBlog::all();
        $categories = CategorieBlog::withCount('articles')->get(); //compte le nombre de categories + renvoie les infos
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
        $users = User::all();
        $tags = Tags::all();
        $categories = CategorieBlog::all();
        return view('back.pages.blog.create',  compact('users', 'categories', 'tags'));
    }

    public function store(Request $request)
    {

        $store = new Article();
        $store->title = $request->title;
        $store->long_desc = $request->long_desc;
        $store->categorie_id = $request->categorie_id;
        $store->users_id = Auth::user()->id;

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
        return redirect('/back/blog')->with('success', 'article created successfully');
    }


    public function show($id)
    {
        $show = Article::find($id);
        $categories = CategorieBlog::all();
        $users = User::all();
        $tags = Tags::all();
        $comments = Comments::all()->where('articles_id','=', $id);
        return view('back.pages.blog.show', compact('show', 'categories', 'tags', 'users', 'comments'));
    }


    public function update(Request $request, $id)
    {
        $update = Article::find($id);
        $update->title = $request->title;
        $update->long_desc = $request->long_desc;
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

        $update->tags()->detach([1,2,3]);

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
