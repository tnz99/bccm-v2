<?php

namespace App\Models\Story\Fauna\Page7;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery8 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page7_gallery8';
    protected $primaryKey = 'fauna_page7_gallery8_id';
    protected $fillable = [
        'fauna_page7_gallery8_id',
        'fauna_page7_gallery8_title',
        'fauna_page7_gallery8_subtitle',
        'fauna_page7_gallery8_description',
        'fauna_page7_gallery8_image',
    ];
}
