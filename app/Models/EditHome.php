<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditHome extends Model
{
    use HasFactory;
    protected $table = 'edit_home_page';
    protected $fillable = [
        'home_title',
        'home_subtitle',
        'home_image',
    ];

}
