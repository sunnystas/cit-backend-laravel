<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class IssueShortNote extends Model
{
    protected $fillable = ['note', 'issue_id'];
}
