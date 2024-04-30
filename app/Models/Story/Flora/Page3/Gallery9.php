<?php

namespace App\Models\Story\Flora\Page3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery9 extends Model
{
    use HasFactory;
    protected $table = 'flora_page3_gallery9';
    protected $primaryKey = 'flora_page3_gallery9_id';
    protected $fillable = [
        'flora_page3_gallery9_id',
        'flora_page3_gallery9_title',
        'flora_page3_gallery9_subtitle',
        'flora_page3_gallery9_description',
        'flora_page3_gallery9_image',
    ];
}
