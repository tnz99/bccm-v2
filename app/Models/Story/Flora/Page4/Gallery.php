<?php

namespace App\Models\Story\Flora\Page4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'flora_page4_table';
    protected $primaryKey = 'flora_page4_id';
    protected $fillable = [
        'flora_page4_id',
        'flora_page4_title',

    ];
}
