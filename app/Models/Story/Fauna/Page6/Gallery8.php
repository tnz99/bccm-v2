<?php

namespace App\Models\Story\Fauna\Page6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery8 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page6_gallery8';
    protected $primaryKey = 'fauna_page6_gallery8_id';
    protected $fillable = [
        'fauna_page6_gallery8_id',
        'fauna_page6_gallery8_title',
        'fauna_page6_gallery8_subtitle',
        'fauna_page6_gallery8_description',
        'fauna_page6_gallery8_image',
    ];
}
