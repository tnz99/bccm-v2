<?php

namespace App\Models\Story\Flora\Page2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'flora_page2_gallery_table';
    protected $primaryKey = 'flora_page2_gallery_id';
    protected $fillable = [
        'flora_page2_gallery_id',
        'flora_page2_gallery_title',

    ];
}
