<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        $reports = Report::all();
        return view('report.index', compact('reports'));
    }

    public function store(Request $request, Report $report) {
        $data = $request -> validate([
            'number' => 'required|string',
            'description' => 'required|string',
        ]);

        $report->create($data);
        return redirect()->route('reports.index');
    }


    public function destroy(Report $report){
        $report -> delete();
        return redirect()->route('reports.index');
    }
}
