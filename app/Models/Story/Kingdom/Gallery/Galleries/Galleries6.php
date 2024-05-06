<?php

namespace App\Models\Story\Kingdom\Gallery\Galleries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries6 extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery6';
    protected $primaryKey = 'kingdom_galleries5_id';
    protected $fillable = [
        'kingdom_galleries5_id',
        'kingdom_galleries5_title',
        'kingdom_galleries5_subtitle',
        'kingdom_galleries5_description',
        'kingdom_galleries5_image',
    ];
}
