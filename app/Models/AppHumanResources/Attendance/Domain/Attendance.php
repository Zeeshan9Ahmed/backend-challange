<?php

namespace App\Models\AppHumanResources\Attendance\Domain;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Employee::class,  'emp_id', 'id');
    }
}
