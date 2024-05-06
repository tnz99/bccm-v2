<?php

namespace App\Models\Story\Flora\Page2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery9 extends Model
{
    use HasFactory;
    protected $table = 'flora_page2_gallery9';
    protected $primaryKey = 'flora_page2_gallery9_id';
    protected $fillable = [
        'flora_page2_gallery9_id',
        'flora_page2_gallery9_title',
        'flora_page2_gallery9_subtitle',
        'flora_page2_gallery9_description',
        'flora_page2_gallery9_image',
    ];
}
