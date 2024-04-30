<?php

namespace App\Models\Story\Fauna\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'fauna_page5';
    protected $primaryKey = 'fauna_page5_id';
    protected $fillable = [
        'fauna_page5_id',
        'fauna_page5_title',

    ];
}
