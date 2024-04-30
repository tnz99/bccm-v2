<?php

namespace App\Models\Story\Fauna\Page6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery3 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page6_gallery3';
    protected $primaryKey = 'fauna_page6_gallery3_id';
    protected $fillable = [
        'fauna_page6_gallery3_id',
        'fauna_page6_gallery3_title',
        'fauna_page6_gallery3_subtitle',
        'fauna_page6_gallery3_description',
        'fauna_page6_gallery3_image',
    ];
}
