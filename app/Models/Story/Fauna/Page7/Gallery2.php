<?php

namespace App\Models\Story\Fauna\Page7;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery2 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page7_gallery2';
    protected $primaryKey = 'fauna_page7_gallery2_id';
    protected $fillable = [
        'fauna_page7_gallery2_id',
        'fauna_page7_gallery2_title',
        'fauna_page7_gallery2_subtitle',
        'fauna_page7_gallery2_description',
        'fauna_page7_gallery2_image',
    ];
}
