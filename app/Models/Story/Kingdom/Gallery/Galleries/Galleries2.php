<?php

namespace App\Models\Story\Kingdom\Gallery\Galleries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries2 extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery2';
    protected $primaryKey = 'kingdom_galleries1_id';
    protected $fillable = [
        'kingdom_galleries1_id',
        'kingdom_galleries1_title',
        'kingdom_galleries1_subtitle',
        'kingdom_galleries1_description',
        'kingdom_galleries1_image',
    ];
}
