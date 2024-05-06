<?php

namespace App\Models\Story\Flora\Page3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery10 extends Model
{
    use HasFactory;
    protected $table = 'flora_page3_gallery10';
    protected $primaryKey = 'flora_page3_gallery10_id';
    protected $fillable = [
        'flora_page3_gallery10_id',
        'flora_page3_gallery10_title',
        'flora_page3_gallery10_subtitle',
        'flora_page3_gallery10_description',
        'flora_page3_gallery10_image',
    ];
}
