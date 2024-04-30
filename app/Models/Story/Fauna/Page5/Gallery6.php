<?php

namespace App\Models\Story\Fauna\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery6 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page5_gallery6';
    protected $primaryKey = 'fauna_page5_gallery6_id';
    protected $fillable = [
        'fauna_page5_gallery6_id',
        'fauna_page5_gallery6_title',
        'fauna_page5_gallery6_subtitle',
        'fauna_page5_gallery6_description',
        'fauna_page5_gallery6_image',
    ];
}
