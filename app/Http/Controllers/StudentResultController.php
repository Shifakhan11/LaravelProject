<?php

namespace App\Http\Controllers;

use App\Models\StudentResult;
use Illuminate\Http\Request;

class StudentResultController extends Controller
{
    
    public function create()
    {
        return view('create');
    }

    
    public function store(Request $request)
    {
        $value = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'marks' => 'required|numeric|between:0,100',
        ]);

    // dd($value);
        $marks = $value['marks'];
        $grade = '';
        $status = '';
        $remarks = '';

        if ($marks >= 90) {
            $grade = 'A';
            $remarks = 'Excellent';
        } elseif ($marks >= 75) {
            $grade = 'B';
            $remarks = 'Very Good';
        } elseif ($marks >= 50) {
            $grade = 'C';
            $remarks = 'Good';
        }
        elseif ($marks >= 45) {
            $grade = 'D';
            $remarks = 'Needs Improvement';
        } else {
            $grade = 'F';
            $remarks = 'Failed. Must Reappear';
        }

        if ($marks >= 35) {
            $status = 'Pass';
        } else {
            $status = 'Fail';
        }


        $result = new StudentResult();
        $result->name = $value['name'];
        $result->subject = $value['subject'];
        $result->marks = $marks;
        $result->grade = $grade;
        $result->status = $status;
        $result->remarks = $remarks;
        $result->save();

        return redirect()->route('show', ['id' => $result->id]);
    }

    
    public function show($id)
    {
        $result = StudentResult::findOrFail($id);
        return view('show', compact('result'));
    }
}