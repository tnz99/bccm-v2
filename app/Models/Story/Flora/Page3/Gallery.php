<?php

namespace App\Models\Story\Flora\Page3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'flora_page3_table';
    protected $primaryKey = 'flora_page3_id';
    protected $fillable = [
        'flora_page3_id',
        'flora_page3_title',

    ];
}
