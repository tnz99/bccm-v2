<?php

namespace App\Models\Story\Flora\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery1 extends Model
{
    use HasFactory;
    protected $table = 'flora_page5_gallery1';
    protected $primaryKey = 'flora_page5_gallery1_id';
    protected $fillable = [
        'flora_page5_gallery1_id',
        'flora_page5_gallery1_title',
        'flora_page5_gallery1_subtitle',
        'flora_page5_gallery1_description',
        'flora_page5_gallery1_image',
    ];
}
