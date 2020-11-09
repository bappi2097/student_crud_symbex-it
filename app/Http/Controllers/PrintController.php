<?php

namespace App\Http\Controllers;

use App\Models\Student;
use PDF;
// use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function printId(Student $student)
    {
        $student = Student::first();
        $pdf = PDF::loadView('id-card-pdf', ["students" => [$student]]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream($student->first_name . "_" . $student->last_name . "-" . str_pad($student->id + 1, 4, '0', STR_PAD_LEFT) . '.pdf');
    }
    public function printIdBulk()
    {
        $pdf = PDF::loadView('id-card-pdf', ["students" => Student::all()]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('all-diu-student-id.pdf');
    }
}
