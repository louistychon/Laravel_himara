<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function testimonial(){
        return $this->hasOne(Room::class, 'id', 'rooms_id');
    }
}
