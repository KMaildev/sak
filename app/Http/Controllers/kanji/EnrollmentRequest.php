<?php

namespace App\Http\Controllers\kanji;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEnrollmentRequests;
use App\Models\EnrollmentRequest as ModelsEnrollmentRequest;
use Illuminate\Http\Request;

class EnrollmentRequest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kanji.enrollment_request.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnrollmentRequests $request)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $path = $photo->store('public/photo');
            $original_name = $photo->getClientOriginalName();
        }

        $enrollment = new ModelsEnrollmentRequest();
        $enrollment->name = $request->name;
        $enrollment->education = $request->education;
        $enrollment->date_of_birth = $request->date_of_birth;
        $enrollment->father_job = $request->father;
        $enrollment->mother_job = $request->mother;
        $enrollment->gender = $request->gender;
        $enrollment->nationality = $request->nationality;
        $enrollment->nrc_no = $request->nrc_no;
        $enrollment->passport_date_of_issue = $request->passport;
        $enrollment->weight_height = $request->weight;
        $enrollment->contact_address = $request->contact_address;
        $enrollment->permanent_address = $request->permanent_address;
        $enrollment->phone_no = $request->phone_no;
        $enrollment->email = $request->email;
        $enrollment->entry_number = $request->entry_number;
        $enrollment->other_class = '';
        $enrollment->photo = $path . $original_name ?? '';
        $enrollment->code = '';
        $enrollment->save();
        return redirect()->back()->with('success', 'Thank you for your contact. our team is ready to response all your queries..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
