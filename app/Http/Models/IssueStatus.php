<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class IssueStatus extends Model
{
    protected $fillable = ['name_ua', 'name_ru', 'name_uk'];
    protected $hidden = ['name_ua', 'name_ru', 'name_uk'];
}
