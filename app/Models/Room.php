<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function tags(){
        return $this->hasMany(Roomtags::class);
    }

    public function type(){
        return $this->hasOne(RoomType::class);
    }

    public function imgs(){
        return $this->hasMany(RoomImg::class);
    }

    public function services(){
        return $this->hasMany(RoomService::class);
    }
}
