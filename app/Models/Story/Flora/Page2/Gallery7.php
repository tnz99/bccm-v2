<?php

namespace App\Models\Story\Flora\Page2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery7 extends Model
{
    use HasFactory;
    protected $table = 'flora_page2_gallery7';
    protected $primaryKey = 'flora_page2_gallery7_id';
    protected $fillable = [
        'flora_page2_gallery7_id',
        'flora_page2_gallery7_title',
        'flora_page2_gallery7_subtitle',
        'flora_page2_gallery7_description',
        'flora_page2_gallery7_image',
    ];
}
