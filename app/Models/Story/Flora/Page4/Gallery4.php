<?php

namespace App\Models\Story\Flora\Page4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery4 extends Model
{
    use HasFactory;
    protected $table = 'flora_page4_gallery4';
    protected $primaryKey = 'flora_page4_gallery4_id';
    protected $fillable = [
        'flora_page4_gallery4_id',
        'flora_page4_gallery4_title',
        'flora_page4_gallery4_subtitle',
        'flora_page4_gallery4_description',
        'flora_page4_gallery4_image',
    ];
}
