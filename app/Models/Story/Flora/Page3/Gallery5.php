<?php

namespace App\Models\Story\Flora\Page3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery5 extends Model
{
    use HasFactory;
    protected $table = 'flora_page3_gallery5';
    protected $primaryKey = 'flora_page3_gallery5_id';
    protected $fillable = [
        'flora_page3_gallery5_id',
        'flora_page3_gallery5_title',
        'flora_page3_gallery5_subtitle',
        'flora_page3_gallery5_description',
        'flora_page3_gallery5_image',
    ];
}
