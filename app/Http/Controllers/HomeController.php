<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Dish;
use App\Models\GalleryImg;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $allslider = Slider::all();
        $dishes = Dish::all()->take(4);
        $galleryimgs = GalleryImg::take(8);
        $partners = Partner::all();
        $services = Service::all()->take(4);
        $blogpost = Article::all()->take(3);
        return view('front.pages.home', compact('dishes', 'galleryimgs', 'partners', 'services', 'blogpost', 'allslider'));
    }

}
