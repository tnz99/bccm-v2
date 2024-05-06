<?php

namespace App\Models\Story\Kingdom;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kingdom extends Model
{
    use HasFactory;
    protected $table = 'kingdom_table';
    protected $primaryKey = 'kingdom_id';
    protected $fillable = [
        'kingdom_id',
        'kingdom_title',

    ];
}
