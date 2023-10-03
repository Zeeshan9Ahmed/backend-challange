<?php

namespace App\Http\Controllers;

use App\AppHumanResources\Attendance\Application\ApplicationService;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function groupByOwner(ApplicationService $service)
    {
        return $service->groupByOwnersService();
    }
}
