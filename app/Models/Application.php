<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'primary_phone',
        'alternate_phone',
        'email',
        'nin',
        'birth_date',
        'marital_status',
        'emergency_contact_name',
        'emergency_contact_address',
        'emergency_contact_primary_phone',
        'emergency_contact_alternate_phone',
        'relationship',
        'package',
        'passport',
        'duration',
        'start_date',
        'end_date',
        'certificate_in_view',
        'requirement',

        // Official use fields
        'student_id',
        'supervisor',
        'terminal_date',
        'designation',
        'ceo_remarks',
    ];
}
