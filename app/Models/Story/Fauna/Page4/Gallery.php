<?php

namespace App\Models\Story\Fauna\Page4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'fauna_page4_table';
    protected $primaryKey = 'fauna_page4_id';
    protected $fillable = [
        'fauna_page4_id',
        'fauna_page4_title',
        'fauna_page4_description',
        'fauna_page4_image',
    ];
}
