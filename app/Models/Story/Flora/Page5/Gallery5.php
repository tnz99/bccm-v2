<?php

namespace App\Models\Story\Flora\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery5 extends Model
{
    use HasFactory;
    protected $table = 'flora_page5_gallery5';
    protected $primaryKey = 'flora_page5_gallery5_id';
    protected $fillable = [
        'flora_page5_gallery5_id',
        'flora_page5_gallery5_title',
        'flora_page5_gallery5_subtitle',
        'flora_page5_gallery5_description',
        'flora_page5_gallery5_image',
    ];
}
