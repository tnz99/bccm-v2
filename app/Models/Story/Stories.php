<?php

namespace App\Models\Story;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    use HasFactory;
    protected $table = 'stories_table';
    protected $primaryKey = 'stories_id';
    protected $fillable = [
        'stories_id',
        'stoies_title',

    ];
}
