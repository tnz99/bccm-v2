<?php

namespace App\Models\Story\Fauna\Page3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'fauna_page3';
    protected $primaryKey = 'fauna_page3_id';
    protected $fillable = [
        'fauna_page3_id',
        'fauna_page3_title',

    ];
}
