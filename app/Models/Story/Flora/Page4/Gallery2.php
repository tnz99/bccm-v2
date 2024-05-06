<?php

namespace App\Models\Story\Flora\Page4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery2 extends Model
{
    use HasFactory;
    protected $table = 'flora_page4_gallery2';
    protected $primaryKey = 'flora_page4_gallery2_id';
    protected $fillable = [
        'flora_page4_gallery2_id',
        'flora_page4_gallery2_title',
        'flora_page4_gallery2_subtitle',
        'flora_page4_gallery2_description',
        'flora_page4_gallery2_image',
    ];
}
