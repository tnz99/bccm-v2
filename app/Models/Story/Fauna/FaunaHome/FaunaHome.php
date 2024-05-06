<?php

namespace App\Models\Story\Fauna\FaunaHome;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaunaHome extends Model
{
    use HasFactory;
    protected $table = 'fauna_home_table';
    protected $primaryKey = 'fauna_home_id';
    protected $fillable = [
        'fauna_home_id',
        'fauna_home_title',
        'fauna_home_description',
        'fauna_home_image',
    ];
}
