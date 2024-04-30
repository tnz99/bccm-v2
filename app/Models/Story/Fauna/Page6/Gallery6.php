<?php

namespace App\Models\Story\Fauna\Page6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery6 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page6_gallery6';
    protected $primaryKey = 'fauna_page6_gallery6_id';
    protected $fillable = [
        'fauna_page6_gallery6_id',
        'fauna_page6_gallery6_title',
        'fauna_page6_gallery6_subtitle',
        'fauna_page6_gallery6_description',
        'fauna_page6_gallery6_image',
    ];
}