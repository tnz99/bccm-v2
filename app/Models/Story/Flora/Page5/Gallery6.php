<?php

namespace App\Models\Story\Flora\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery6 extends Model
{
    use HasFactory;
    protected $table = 'flora_page5_gallery6';
    protected $primaryKey = 'flora_page5_gallery6_id';
    protected $fillable = [
        'flora_page5_gallery6_id',
        'flora_page5_gallery6_title',
        'flora_page5_gallery6_subtitle',
        'flora_page5_gallery6_description',
        'flora_page5_gallery6_image',
    ];
}
