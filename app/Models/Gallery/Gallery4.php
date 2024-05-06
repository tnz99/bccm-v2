<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery4 extends Model
{
    use HasFactory;
    protected $table = 'gallery4_table';
    protected $fillable = [
        'gallery4_title',
        'gallery4_description',
        'gallery4_image',
    ];
}
