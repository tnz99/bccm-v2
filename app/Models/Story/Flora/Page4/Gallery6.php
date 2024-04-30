<?php

namespace App\Models\Story\Flora\Page4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery6 extends Model
{
    use HasFactory;
    protected $table = 'flora_page4_gallery6';
    protected $primaryKey = 'flora_page4_gallery6_id';
    protected $fillable = [
        'flora_page4_gallery6_id',
        'flora_page4_gallery6_title',
        'flora_page4_gallery6_subtitle',
        'flora_page4_gallery6_description',
        'flora_page4_gallery6_image',
    ];
}
