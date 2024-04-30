<?php

namespace App\Models\Story\Fauna\Page7;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'fauna_page7';
    protected $primaryKey = 'fauna_page7_id';
    protected $fillable = [
        'fauna_page7_id',
        'fauna_page7_title',

    ];
}
