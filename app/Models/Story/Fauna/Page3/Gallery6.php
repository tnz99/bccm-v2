<?php

namespace App\Models\Story\Fauna\Page3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery6 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page3_gallery6';
    protected $primaryKey = 'fauna_page3_gallery6_id';
    protected $fillable = [
        'fauna_page3_gallery6_id',
        'fauna_page3_gallery6_title',
        'fauna_page3_gallery6_subtitle',
        'fauna_page3_gallery6_description',
        'fauna_page3_gallery6_image',
    ];
}
