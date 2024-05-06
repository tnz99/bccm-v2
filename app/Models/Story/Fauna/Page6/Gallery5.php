<?php

namespace App\Models\Story\Fauna\Page6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery5 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page6_gallery5';
    protected $primaryKey = 'fauna_page6_gallery5_id';
    protected $fillable = [
        'fauna_page6_gallery5_id',
        'fauna_page6_gallery5_title',
        'fauna_page6_gallery5_subtitle',
        'fauna_page6_gallery5_description',
        'fauna_page6_gallery5_image',
    ];
}
