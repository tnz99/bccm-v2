<?php

namespace App\Models\Story\Fauna\Page6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery7 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page6_gallery7';
    protected $primaryKey = 'fauna_page6_gallery7_id';
    protected $fillable = [
        'fauna_page6_gallery7_id',
        'fauna_page6_gallery7_title',
        'fauna_page6_gallery7_subtitle',
        'fauna_page6_gallery7_description',
        'fauna_page6_gallery7_image',
    ];
}