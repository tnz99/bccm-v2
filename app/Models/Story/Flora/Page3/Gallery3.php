<?php

namespace App\Models\Story\Flora\Page3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery3 extends Model
{
    use HasFactory;
    protected $table = 'flora_page3_gallery3';
    protected $primaryKey = 'flora_page3_gallery3_id';
    protected $fillable = [
        'flora_page3_gallery3_id',
        'flora_page3_gallery3_title',
        'flora_page3_gallery3_subtitle',
        'flora_page3_gallery3_description',
        'flora_page3_gallery3_image',
    ];
}
