<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\GalleryImg;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dishes = Dish::all()->take(2);
        $galleryimgs = GalleryImg::all();
        $partners = Partner::all();
        return view('front.pages.home', compact('dishes', 'galleryimgs', 'partners'));
    }


}
