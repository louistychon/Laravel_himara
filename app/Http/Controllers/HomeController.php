<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Dish;
use App\Models\GalleryImg;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dishes = Dish::all()->take(4);
        $galleryimgs = GalleryImg::all();
        $partners = Partner::all();
        $services = Service::all()->take(4);
        $blogpost = Article::all()->take(3);
        return view('front.pages.home', compact('dishes', 'galleryimgs', 'partners', 'services', 'blogpost'));
    }

}