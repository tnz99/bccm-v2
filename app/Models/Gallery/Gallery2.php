<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery2 extends Model
{
    use HasFactory;
    protected $table = 'gallery2_table';
    protected $fillable = [
        'gallery2_title',
        'gallery2_description',
        'gallery2_image',
    ];
}
