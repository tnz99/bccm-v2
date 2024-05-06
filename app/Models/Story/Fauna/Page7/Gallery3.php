<?php

namespace App\Models\Story\Fauna\Page7;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery3 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page7_gallery3';
    protected $primaryKey = 'fauna_page7_gallery3_id';
    protected $fillable = [
        'fauna_page7_gallery3_id',
        'fauna_page7_gallery3_title',
        'fauna_page7_gallery3_subtitle',
        'fauna_page7_gallery3_description',
        'fauna_page7_gallery3_image',
    ];
}
