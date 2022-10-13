<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function tags(){
        return $this->belongsToMany(Roomtags::class, 'room_tags', 'rooms_id', 'roomtags_id');
    }

    public function imgs(){
        return $this->belongsToMany(RoomImg::class, 'room_roomimg', 'rooms_id', 'roomimg_id');
    }

    public function services(){
        return $this->belongsToMany(RoomService::class, 'room_roomservices', 'rooms_id', 'room_services_id' );
    }

    public function type(){
        return $this->hasOne(RoomType::class, 'id', 'roomtypes_id');
    }

}
