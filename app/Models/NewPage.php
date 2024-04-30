<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewPage extends Model
{
    use HasFactory;
    protected $table = 'new_page_table';
    protected $primaryKey = 'page_title_id';
    protected $fillable = [
        'page_title_id',
        'page_title',

    ];
}
