<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery3 extends Model
{
    use HasFactory;
    protected $table = 'gallery3_table';
    protected $fillable = [
        'gallery3_title',
        'gallery3_description',
        'gallery3_image',
    ];
}
