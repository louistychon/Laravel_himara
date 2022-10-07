@extends('back.layouts.index')
@section('content')
    <form action="/back/home/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @foreach ($hometext as $text)
            <div class="mb-6">
                <label for="src" class="">Background Image intro</label>
                <div class="w-1/2 mt-4"><img src="{{ asset('storage/' . $text->about_img) }}" class=""></div>
                <input type="file" id="src" name="about_img" class="mt-4">
            </div>
            <div class="mb-6">
                <label for="title_intro" class="block mb-2 text-sm font-medium">Title intro</label>
                <input type="text" id="title_intro" name="title_intro" class="focus:ring-0"
                    value="{{ $text->title_intro }}">
            </div>
            <div class="mb-6">
                <label for="under_title_intro" class="block mb-2 text-sm font-medium">Under title intro</label>
                <input type="text" id="under_title_intro" name="under_title_intro" class="focus:ring-0"
                    value="{{ $text->under_title_intro }}">
            </div>
            <div class="mb-6">
                <label for="text_intro" class="block mb-2 text-sm font-medium">Text intro</label>
                <input type="text" id="text_intro" name="text_intro" class="focus:ring-0"
                    value="{{ $text->text_intro }}">
            </div>


            <div class="mb-6">
                <label for="stars" class="block mb-2 text-sm font-medium">Stars card</label>
                <input type="number" id="stars" name="stars" class="focus:ring-0" value="{{ $text->stars }}">
            </div>
            <div class="mb-6">
                <label for="text_card" class="block mb-2 text-sm font-medium">Text in card about</label>
                <input type="text" id="text_card" name="text_card" class="focus:ring-0" value="{{ $text->text_card }}">
            </div>
            <div class="mb-6">
                <label for="title_rooms" class="block mb-2 text-sm font-medium">Title rooms</label>
                <input type="title_rooms" id="title_rooms" name="title_rooms" class="focus:ring-0"
                    value="{{ $text->title_rooms }}">
            </div>
            <div class="mb-6">
                <label for="under_title_rooms" class="block mb-2 text-sm font-medium">Under title rooms</label>
                <input type="under_title_rooms" id="under_title_rooms" name="under_title_rooms" class="focus:ring-0"
                    value="{{ $text->title_rooms }}">
            </div>

            <div class="mb-6">
                <label for="title_services" class="block mb-2 text-sm font-medium">Title services</label>
                <input type="text" id="title_services" name="title_services" class="focus:ring-0"
                    value="{{ $text->title_services }}">
            </div>

            <div class="mb-6">
                <label for="under_title_services" class="block mb-2 text-sm font-medium">Under title services</label>
                <input type="text" id="under_title_services" name="under_title_services" class="focus:ring-0"
                    value="{{ $text->under_title_services }}">
            </div>

            <div class="mb-6">
                <label for="title_gallery" class="block mb-2 text-sm font-medium">Title gallery</label>
                <input type="text" id="title_gallery" name="title_gallery" class="focus:ring-0"
                    value="{{ $text->title_gallery }}">
            </div>

            <div class="mb-6">
                <label for="under_title_gallery" class="block mb-2 text-sm font-medium">Under title gallery</label>
                <input type="text" id="under_title_gallery" name="under_title_gallery" class="focus:ring-0"
                    value="{{ $text->under_title_gallery }}">
            </div>

            <div class="mb-6">
                <label for="title_testimonial" class="block mb-2 text-sm font-medium">Title testimonial</label>
                <input type="text" id="title_testimonial" name="title_testimonial" class="focus:ring-0"
                    value="{{ $text->title_testimonial }}">
            </div>

            <div class="mb-6">
                <label for="under_title_testimonial" class="block mb-2 text-sm font-medium">Under title
                    testimonial</label>
                <input type="text" id="under_title_testimonial" name="under_title_testimonial" class="focus:ring-0"
                    value="{{ $text->under_title_testimonial }}">
            </div>

            <div class="mb-6">
                <label for="title_news" class="block mb-2 text-sm font-medium">Title news</label>
                <input type="text" id="title_news" name="title_news" class="focus:ring-0"
                    value="{{ $text->title_news }}">
            </div>

            <div class="mb-6">
                <label for="under_title_news" class="block mb-2 text-sm font-medium">Under title news</label>
                <input type="text" id="under_title_news" name="under_title_news" class="focus:ring-0"
                    value="{{ $text->under_title_news }}">
            </div>

            <div class="mb-6">
                <label for="title_contact1" class="block mb-2 text-sm font-medium">Title contact 1</label>
                <input type="text" id="title_contact1" name="title_contact1" class="focus:ring-0"
                    value="{{ $text->title_contact1 }}">
            </div>

            <div class="mb-6">
                <label for="under_title_contact1" class="block mb-2 text-sm font-medium">Under title contact 1</label>
                <input type="text" id="under_title_contact1" name="under_title_contact1" class="focus:ring-0"
                    value="{{ $text->under_title_contact1 }}">
            </div>

            <div class="mb-6">
                <label for="title_contact2" class="block mb-2 text-sm font-medium">Title contact2</label>
                <input type="text" id="title_contact2" name="title_contact2" class="focus:ring-0"
                    value="{{ $text->title_contact2 }}">
            </div>

            <div class="mb-6">
                <label for="under_title_contact2" class="block mb-2 text-sm font-medium">Under title contact2</label>
                <input type="text" id="under_title_contact2" name="under_title_contact2" class="focus:ring-0"
                    value="{{ $text->under_title_contact2 }}">
            </div>

            <div class="mb-6">
                <label for="button_contact" class="block mb-2 text-sm font-medium">Button contact</label>
                <input type="text" id="button_contact" name="button_contact" class="focus:ring-0"
                    value="{{ $text->button_contact }}">
            </div>

            <div class="mb-6">
                <label for="video_link" class="block mb-2 text-sm font-medium">Video link</label>
                <input type="text" id="video_link" name="video_link" class="focus:ring-0"
                    value="{{ $text->video_link }}">
            </div>
            <div class="mb-6">
                <label for="background_image_restaurant" class="block mb-2 text-sm font-medium">Background image
                    restaurant</label>
                   <img src="{{ asset('/storage/backgrounds/thumbnail/'.$text->background_image_restaurant) }}">
                <input type="file" id="background_image_restaurant" name="background_image_restaurant"
                    class="focus:ring-0">
            </div>

            <div class="mb-6">
                <label for="background_image_video" class="block mb-2 text-sm font-medium">Background image video</label>
                <img src="{{ asset('/storage/backgrounds/thumbnail/'.$text->background_image_video) }}">
                <input type="file" id="background_image_video" name="background_image_video" class="focus:ring-0">
            </div>
        @endforeach
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
        </div>
    </form>
@endsection
