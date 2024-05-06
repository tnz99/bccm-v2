<?php

namespace App\Models\Story\Flora;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flora extends Model
{
    use HasFactory;
    protected $table = 'flora_page_table';
    protected $primaryKey = 'flora_page_id';
    protected $fillable = [
        'flora_page_id',
        'flora_page_title',

    ];
}
