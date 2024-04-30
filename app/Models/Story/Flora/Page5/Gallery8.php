<?php

namespace App\Models\Story\Flora\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery8 extends Model
{
    use HasFactory;
    protected $table = 'flora_page5_gallery8';
    protected $primaryKey = 'flora_page5_gallery8_id';
    protected $fillable = [
        'flora_page5_gallery8_id',
        'flora_page5_gallery8_title',
        'flora_page5_gallery8_subtitle',
        'flora_page5_gallery8_description',
        'flora_page5_gallery8_image',
    ];
}
