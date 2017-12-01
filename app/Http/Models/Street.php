<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $fillable = ['city_id', 'name_ua', 'name_ru', 'name_uk'];
}
