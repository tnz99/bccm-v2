<?php

namespace App\Models\Story\Kingdom\Gallery\Galleries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries5 extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery5';
    protected $primaryKey = 'kingdom_galleries4_id';
    protected $fillable = [
        'kingdom_galleries4_id',
        'kingdom_galleries4_title',
        'kingdom_galleries4_subtitle',
        'kingdom_galleries4_description',
        'kingdom_galleries4_image',
    ];
}
