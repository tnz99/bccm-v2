<?php

namespace App\Models\Story\Kingdom\Gallery\Galleries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries8 extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery8';
    protected $primaryKey = 'kingdom_galleries7_id';
    protected $fillable = [
        'kingdom_galleries7_id',
        'kingdom_galleries7_title',
        'kingdom_galleries7_subtitle',
        'kingdom_galleries7_description',
        'kingdom_galleries7_image',
    ];
}
