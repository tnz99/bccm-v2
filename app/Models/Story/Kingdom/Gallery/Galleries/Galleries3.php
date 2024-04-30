<?php

namespace App\Models\Story\Kingdom\Gallery\Galleries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries3 extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery3';
    protected $primaryKey = 'kingdom_galleries2_id';
    protected $fillable = [
        'kingdom_galleries2_id',
        'kingdom_galleries2_title',
        'kingdom_galleries2_subtitle',
        'kingdom_galleries2_description',
        'kingdom_galleries2_image',
    ];
}
