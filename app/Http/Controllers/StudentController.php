<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showAllData()
    {
        return Student::all();
    }

    public function storeData(Request $request)
    {
        $data = $request->validate([
            'fullname'=>$request->fullname,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth,
        ]);//dependency injection

        return Student::create($data);
    }

    public function showOneData($id)
    {
        return Student::findOrFail($id);
    }

    public function updateData(Request $request, $id)
    {
        return Student::find($id)->update([
            'fullname'=>$request->fullname,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth,
        ]);
    }

    public function deleteData($id)
    {
       return Student::find($id)->delete();
    }
}


