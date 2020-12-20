<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;



    protected $fillable = [
        'isAdmin', 'stock_create', 'stock_view', 'stock_use', 'stock_edit',
        'stock_delete', 'welfare_create', 'welfare_view', 'welfare_edit', 'welfare_delete', 'employee_view_all',
        'employee_view_basic', 'employee_view_hr', 'employee_edit_all', 'employee_edit_basic', 'employee_edit_hr',
        'employee_delete', 'department_create', 'department_view', 'department_edit', 'department_delete'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
