<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class IssueCategory extends Model
{
    protected $fillable = ['name_ua', 'name_ru', 'name_uk', 'parent_id'];
    protected $hidden = ['name_ua', 'name_ru', 'name_uk'];
}
