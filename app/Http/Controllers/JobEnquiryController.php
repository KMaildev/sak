<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobEnquiry;
use App\Models\JobEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(StoreJobEnquiry $request)
    {

        if ($request->hasFile('attachment_file')) {
            $attachment_file = $request->file('attachment_file');
            $path = $attachment_file->store('public/attachment_file');
            $original_name = $attachment_file->getClientOriginalName();
        }

        $job = new JobEnquiry();
        $job->name = $request->name;
        $job->nrc = $request->nrc;
        $job->email = $request->email;
        $job->phone = $request->phone;
        $job->date_of_birth = $request->date_of_birth;
        $job->age = $request->age;
        $job->gender = $request->gender;
        $job->passport = $request->passport;
        $job->expire_date = $request->expire_date;
        $job->education = $request->education;
        $job->language = $request->language;
        $job->current_address = $request->current_address;
        $job->attachment_file = $original_name ?? '';
        $job->path = $path ?? '';
        $job->save();
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
