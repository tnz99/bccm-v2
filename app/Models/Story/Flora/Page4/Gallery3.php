<?php

namespace App\Models\Story\Flora\Page4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery3 extends Model
{
    use HasFactory;
    protected $table = 'flora_page4_gallery3';
    protected $primaryKey = 'flora_page4_gallery3_id';
    protected $fillable = [
        'flora_page4_gallery3_id',
        'flora_page4_gallery3_title',
        'flora_page4_gallery3_subtitle',
        'flora_page4_gallery3_description',
        'flora_page4_gallery3_image',
    ];
}
