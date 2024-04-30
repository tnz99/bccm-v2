<?php

namespace App\Models\Story\Kingdom\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KingdomGallery extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery_table';
    protected $primaryKey = 'kingdom_gallery_id';
    protected $fillable = [
        'kingdom_gallery_id',
        'kingdom_gallery_title',

    ];
}
