<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'bookings';

    // Define the fillable properties
    protected $fillable = [
        'full_name',
        'phone',
        'session_day',
        'session_time',
        'class_type',
        'session_type',
        'study_level',
        'additional_info',
    ];
}
