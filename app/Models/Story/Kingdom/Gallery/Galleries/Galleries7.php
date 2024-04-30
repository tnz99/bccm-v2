<?php

namespace App\Models\Story\Kingdom\Gallery\Galleries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries7 extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery7';
    protected $primaryKey = 'kingdom_galleries6_id';
    protected $fillable = [
        'kingdom_galleries6_id',
        'kingdom_galleries6_title',
        'kingdom_galleries6_subtitle',
        'kingdom_galleries6_description',
        'kingdom_galleries6_image',
    ];
}
