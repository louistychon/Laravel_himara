<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtags extends Model
{
    use HasFactory;

    public function tags(){
        return $this->belongsToMany(Room::class, 'room_tags', 'roomtags_id' , 'rooms_id');
    }
}
