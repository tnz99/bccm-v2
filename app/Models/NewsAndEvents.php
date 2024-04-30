<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAndEvents extends Model
{
    use HasFactory;
    protected $table = 'news_table';
    protected $fillable = [
        'news_title',

        'news_description',
        'news_image',
    ];
}
