<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id', 'name', 'surname', 'email', 'gender', 'blood_group',
        'place_of_birth', 'date_of_birth_official', 'mobile', 'address', 'marital_status', 'nationality',
        'id_number', 'emergency_contact_name', 'emergency_contact_mobile', 'emergency_contact_type', 'education_status',
        'military_status', 'start_date', 'end_date', 'department', 'unit', 'manager',
        'position', 'position_eng', 'administrative_title', 'job_type', 'account_number', 'photo',
        'status'
    ];


}
