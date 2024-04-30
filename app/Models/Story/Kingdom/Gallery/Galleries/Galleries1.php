<?php

namespace App\Models\Story\Kingdom\Gallery\Galleries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries1 extends Model
{
    use HasFactory;
    protected $table = 'kingdom_gallery1';
    protected $primaryKey = 'kingdom_galleries0_id';
    protected $fillable = [
        'kingdom_galleries0_id',
        'kingdom_galleries0_title',
        'kingdom_galleries0_subtitle',
        'kingdom_galleries0_description',
        'kingdom_galleries0_image',
    ];
}
