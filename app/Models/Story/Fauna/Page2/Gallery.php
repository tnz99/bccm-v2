<?php

namespace App\Models\Story\Fauna\Page2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'fauna_page2_table';
    protected $primaryKey = 'fauna_page2_id';
    protected $fillable = [
        'fauna_page2_id',
        'fauna_page2_title',
        'fauna_page2_description',
        'fauna_page2_image',
    ];
}
