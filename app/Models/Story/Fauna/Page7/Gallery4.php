<?php

namespace App\Models\Story\Fauna\Page7;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery4 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page7_gallery4';
    protected $primaryKey = 'fauna_page7_gallery4_id';
    protected $fillable = [
        'fauna_page7_gallery4_id',
        'fauna_page7_gallery4_title',
        'fauna_page7_gallery4_subtitle',
        'fauna_page7_gallery4_description',
        'fauna_page7_gallery4_image',
    ];
}
