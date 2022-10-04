<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImg extends Model
{
    use HasFactory;

    public function filter()
    {
        return $this->belongsTo(filtergallery::class, 'filtergalleries_id', 'id');
    }
}
