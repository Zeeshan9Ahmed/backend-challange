<?php

namespace App\AppHumanResources\Attendance\Application;

use App\Models\AppHumanResources\Attendance\Domain\Attendance;

class AttendanceService
{
    public function showAttendance()
    {
        $attendance = Attendance::with('user:id,name')->select('*')
            ->selectRaw('ROUND((TIMESTAMPDIFF(SECOND, check_in, check_out) / 3600), 2) as total_hours')
            ->get();
        return $attendance;
    }
}
