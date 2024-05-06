<?php

namespace App\Models\Story\Flora\Page5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'flora_page5_table';
    protected $primaryKey = 'flora_page5_id';
    protected $fillable = [
        'flora_page5_id',
        'flora_page5_title',

    ];
}
