<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
        'notify_about_changes',
        'home_street_id',
        'home_building_no',
        'home_flat_no',
        'issue_street_id',
        'issue_building_no',
        'issue_flat_no',
        'category_id',
        'utility_service_id',
        'utility_service_employee_id',
        'priority_id',
        'status_id',
        'notes',
        'pictures',
        'expected_end_date',
        'is_paid',
        'is_on_control',
        'extra_employees',
    ];
}
