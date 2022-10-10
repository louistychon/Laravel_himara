<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Dish;
use App\Models\GalleryImg;
use App\Models\Hometext;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class HomeController extends Controller
{
    public function index(){
        $allslider = Slider::all();
        $dishes = Dish::all()->take(4);
        $galleryimgs = GalleryImg::take(8);
        $partners = Partner::all();
        $services = Service::all()->take(4);
        $blogpost = Article::all()->take(3);
        $hometext = Hometext::all();
        $testimonials = Testimonial::all();
        return view('front.pages.home', compact('dishes', 'galleryimgs', 'partners', 'services', 'blogpost', 'allslider', 'hometext', 'testimonials'));
    }


    public function index2(){
        $hometext = Hometext::all();
        return view('back.pages.home.show', compact('hometext'));
    }


    public function update(Request $request)
    {
        $update = Hometext::first();
        $update->title_intro = $request->title_intro;
        $update->title_card = $request->title_card;
        $update->stars = $request->stars;
        $update->text_card = $request->text_card;
        $update->title_rooms = $request->title_rooms;
        $update->title_services = $request->title_services;
        $update->title_gallery = $request->title_gallery;
        $update->title_testimonial = $request->title_testimonial;
        $update->title_restaurant = $request->title_restaurant;
        $update->title_news = $request->title_news;
        $update->title_contact1 = $request->title_contact1;
        $update->title_contact2 = $request->title_contact2;
        $update->text_intro = $request->text_intro;
        $update->title_contact2 = $request->title_contact2;
        $update->under_title_intro = $request->under_title_intro;
        $update->under_title_rooms = $request->under_title_rooms;
        $update->under_title_services = $request->under_title_services;
        $update->under_title_gallery = $request->under_title_gallery;
        $update->under_title_testimonial = $request->under_title_testimonial;
        $update->under_title_restaurant = $request->under_title_restaurant;
        $update->under_title_news = $request->under_title_news;
        $update->under_title_contact1 = $request->under_title_contact1;
        $update->under_title_contact2 = $request->under_title_contact2;
        $update->button_contact = $request->button_contact;
        $update->video_link = $request->video_link;

        if ($request->hasFile('about_img')) {
            //get filename with extension
            $filenamewithextension = $request->file('about_img')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('about_img')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('about_img')->storeAs('storage/', $filenametostore);
            $request->file('about_img')->storeAs('storage/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(400, 600);
            $img->save();
            $update->about_img = $filenametostore;
        }

        if ($request->hasFile('background_image_restaurant')) {
            //get filename with extension
            $filenamewithextension = $request->file('background_image_restaurant')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('background_image_restaurant')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('background_image_restaurant')->storeAs('storage/', $filenametostore);
            $request->file('background_image_restaurant')->storeAs('storage/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/backgrounds/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1392, 394);
            $img->save();
            $update->background_image_restaurant = $filenametostore;
        }

        if ($request->hasFile('background_image_video')) {
            //get filename with extension
            $filenamewithextension = $request->file('background_image_video')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('background_image_video')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('background_image_video')->storeAs('storage/backgrounds/', $filenametostore);
            $request->file('background_image_video')->storeAs('storage/backgrounds/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/backgrounds/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1920, 800);
            $img->save();
            $update->background_image_video = $filenametostore;
        }

        $update->save();
        return redirect()->back();
    }

}
