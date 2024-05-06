<?php

namespace App\Models\Story\Fauna\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery9 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page5_gallery9';
    protected $primaryKey = 'fauna_page5_gallery9_id';
    protected $fillable = [
        'fauna_page5_gallery9_id',
        'fauna_page5_gallery9_title',
        'fauna_page5_gallery9_subtitle',
        'fauna_page5_gallery9_description',
        'fauna_page5_gallery9_image',
    ];
}
