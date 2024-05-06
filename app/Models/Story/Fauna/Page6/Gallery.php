<?php

namespace App\Models\Story\Fauna\Page6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'fauna_page6';
    protected $primaryKey = 'fauna_page6_id';
    protected $fillable = [
        'fauna_page6_id',
        'fauna_page6_title',

    ];
}
