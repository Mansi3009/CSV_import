<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use DB;
use Excel;

class StudentController extends Controller
{
    public function exportToExcel()
    {
    	return Excel::download(new StudentExport, 'student-excel.xlsx');
    }
    public function exportToCSV()
    {
    	return Excel::download(new StudentExport, 'student-csv.csv');
    }

    public function importUploadForm()
    {
    	return view('import-form');
    }
    public function importForm(Request $req)
    {
    	Excel::import(new StudentImport,$req->file);
    	return "<h1>"."Records are imported";
    }
}
