<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // 'id'ን ለደህንነት ሲባል አውጥተነዋል
    protected $fillable = [
        'name',
        'email',
        'phone',
        'enrollment_date'
    ];

    // ቀኑን እንደ Carbon object ለመጠቀም ይረዳሃል
    protected $casts = [
        'enrollment_date' => 'date',
    ];
}
