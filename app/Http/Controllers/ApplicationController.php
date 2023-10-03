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

    public function duplicates () {
        // One approach is 
        $arr = [2, 3, 1, 2, 3];
        $seen = [];
        $duplicates = [];
    
        foreach ($arr as $num) {
            if (isset($seen[$num])) {
                $duplicates[] = $num;
            } else {
                $seen[$num] = true;
            }
        }
    
        return array_unique($duplicates);

        // Second Approach is by using brute force approach 

        // third approach is using binary search 
    }
}
