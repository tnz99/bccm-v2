<?php

namespace App\Models\Story\Flora;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloraHome extends Model
{
    use HasFactory;
    protected $table = 'flora_home';
    protected $primaryKey = 'flora_home_id';
    protected $fillable = [
        'flora_home_id',
        'flora_home_title',
        'flora_home_description',
        'flora_home_image',
    ];
}
