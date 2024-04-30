<?php

namespace App\Models\Story\Fauna\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery1 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page5_gallery1';
    protected $primaryKey = 'fauna_page5_gallery1_id';
    protected $fillable = [
        'fauna_page5_gallery1_id',
        'fauna_page5_gallery1_title',
        'fauna_page5_gallery1_subtitle',
        'fauna_page5_gallery1_description',
        'fauna_page5_gallery1_image',
    ];
}
