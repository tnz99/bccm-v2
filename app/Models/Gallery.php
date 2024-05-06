<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    // public $timestamps = false;
    use HasFactory;
    protected $table = 'gallery';
    protected $primaryKey = 'gallery_id';
    protected $fillable = [
        'gallery_id',
        'gallary_title',

    ];
}

