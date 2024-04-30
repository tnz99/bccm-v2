<?php

namespace App\Models\Story\Fauna\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery11 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page5_gallery11';
    protected $primaryKey = 'fauna_page5_gallery11_id';
    protected $fillable = [
        'fauna_page5_gallery11_id',
        'fauna_page5_gallery11_title',
        'fauna_page5_gallery11_subtitle',
        'fauna_page5_gallery11_description',
        'fauna_page5_gallery11_image',
    ];
}
