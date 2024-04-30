<?php

namespace App\Models\Story\Fauna\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery10 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page5_gallery10';
    protected $primaryKey = 'fauna_page5_gallery10_id';
    protected $fillable = [
        'fauna_page5_gallery10_id',
        'fauna_page5_gallery10_title',
        'fauna_page5_gallery10_subtitle',
        'fauna_page5_gallery10_description',
        'fauna_page5_gallery10_image',
    ];
}
