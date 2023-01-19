<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        // return "<h1>This is from the controller!</h1><p>Hi I am Leah!</p>";
        return Contact::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'contact_number'=>$request->contact_number,
            'address'=>$request->address,
            'student_id'=>$request->student_id
        ]);//dependency injection

        return Contact::create($data);

        // return Contact::create([
        //     'contact_number'=>$request->contact_number,
        //     'address'=>$request->address,
        //     'student_id'=>$request->student_id

        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Contact::findOrFail($id);
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
        return Contact::find($id)->update([

            'contact_number'=>$request->contact_number,
            'address'=>$request->address,
            'student_id'=>$request->student_id
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
       return Contact::find($id)->delete();
    }
}

