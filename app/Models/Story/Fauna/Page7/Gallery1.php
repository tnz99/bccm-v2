<?php

namespace App\Models\Story\Fauna\Page7;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery1 extends Model
{
    use HasFactory;
    protected $table = 'fauna_page7_gallery1';
    protected $primaryKey = 'fauna_page7_gallery1_id';
    protected $fillable = [
        'fauna_page7_gallery1_id',
        'fauna_page7_gallery1_title',
        'fauna_page7_gallery1_subtitle',
        'fauna_page7_gallery1_description',
        'fauna_page7_gallery1_image',
    ];
}
