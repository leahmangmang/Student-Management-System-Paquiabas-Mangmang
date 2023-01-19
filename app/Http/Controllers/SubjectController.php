<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        return Subject::all();
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'fullname' => $request -> fullname,
            'gender' => $request -> gender,
            'date_of_birth' => $request -> date_of_birth,

        ]);
        return Subject::create($data);
    }

    public function show($id)
    {
        return Subject::findOrFail($id);
        // return Specialization::where('id',$id)->first();
        // $age = 12;

        // return $age;
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return Subject::find($id)->update([
            'fullname' => $request -> fullname,
            'gender' => $request -> gender,
            'date_of_birth' => $request -> date_of_birth,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return Subject::find($id)->delete();
    }
}



