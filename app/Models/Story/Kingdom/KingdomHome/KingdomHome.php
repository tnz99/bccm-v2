<?php

namespace App\Models\Story\Kingdom\KingdomHome;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KingdomHome extends Model
{
    use HasFactory;
    protected $table = 'kingdom_home_table';
    protected $primaryKey = 'kingdom_home_id';
    protected $fillable = [
        'kingdom_home_id',
        'kingdom_home_title',
        'kingdom_home_subtitle',
        'kingdom_home_description',
        'kingdom_home_image',
    ];
}
