<?php

namespace App\Models\Story\Flora\Page2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery10 extends Model
{
    use HasFactory;
    protected $table = 'flora_page2_gallery10';
    protected $primaryKey = 'flora_page2_gallery10_id';
    protected $fillable = [
        'flora_page2_gallery10_id',
        'flora_page2_gallery10_title',
        'flora_page2_gallery10_subtitle',
        'flora_page2_gallery10_description',
        'flora_page2_gallery10_image',
    ];
}
