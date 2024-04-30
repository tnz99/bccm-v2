<?php

namespace App\Models\Story\Fauna;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fauna extends Model
{
    use HasFactory;
    protected $table = 'fauna_page_table';
    protected $primaryKey = 'fauna_page_id';
    protected $fillable = [
        'fauna_page_id',
        'fauna_page_title',

    ];
}
