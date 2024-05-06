<?php

namespace App\Models\Story\Fauna\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery8 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page5_gallery8';
    protected $primaryKey = 'fauna_page5_gallery8_id';
    protected $fillable = [
        'fauna_page5_gallery8_id',
        'fauna_page5_gallery8_title',
        'fauna_page5_gallery8_subtitle',
        'fauna_page5_gallery8_description',
        'fauna_page5_gallery8_image',
    ];
}
