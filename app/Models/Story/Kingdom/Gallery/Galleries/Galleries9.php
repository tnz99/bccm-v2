<?php

namespace App\Models\Story\Kingdom\Gallery\Galleries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries9 extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery9';
    protected $primaryKey = 'kingdom_galleries8_id';
    protected $fillable = [
        'kingdom_galleries8_id',
        'kingdom_galleries8_title',
        'kingdom_galleries8_subtitle',
        'kingdom_galleries8_description',
        'kingdom_galleries8_image',
    ];
}
