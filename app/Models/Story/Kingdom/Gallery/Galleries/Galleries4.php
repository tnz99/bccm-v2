<?php

namespace App\Models\Story\Kingdom\Gallery\Galleries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries4 extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery4';
    protected $primaryKey = 'kingdom_galleries3_id';
    protected $fillable = [
        'kingdom_galleries3_id',
        'kingdom_galleries3_title',
        'kingdom_galleries3_subtitle',
        'kingdom_galleries3_description',
        'kingdom_galleries3_image',
    ];
}
