<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery1 extends Model
{
    use HasFactory;
    protected $table = 'gallery1_table';
    protected $fillable = [
        'gallery1_title',
        'gallery1_description',
        'gallery1_image',
    ];
}
