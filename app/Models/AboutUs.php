<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUS extends Model
{
    use HasFactory;
    protected $table = 'about_table';
    protected $fillable = [
        'about_title',
        'about_description',
        'about_image',
    ];
}
