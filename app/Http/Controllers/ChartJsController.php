<?php

namespace App\Http\Controllers;
use App\Models\Patient;


class ChartJsController extends Controller
{
    public function countByMonth()
    {
        // Retrieve the counts of patients grouped by year and month
        $patientCounts = Patient::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc') // Specify 'asc' for ascending order
            ->orderBy('month', 'asc') // Specify 'asc' for ascending order
            ->get();
    
        $labels = $patientCounts->map(function ($item) {
            return date('F Y', mktime(0, 0, 0, $item->month, 1, $item->year));
        });
    
        $data = $patientCounts->pluck('count');
    
        return view('dashboard', compact('labels', 'data'));
    }
    
}
