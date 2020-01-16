<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\AcademicSession;
use Illuminate\Http\Request;

class AcademicSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['academicSessions']= AcademicSession::orderBy('id','desc')->paginate(2);
        return view('mad.academicSession.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mad.academicSession.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'session_name'=>'required',
            'start_date' =>'required',
            'end_date'=> 'required',
        ]);

        //store data into  data variable from request
        $data = $request->except('_token');
        //dd($data);
        AcademicSession::create($data);
        session()->flash('message','Session created successfully');
        return redirect()->route('academicSession.index');

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
    public function edit(Request $request, $id)
    {
        $data['academicSession'] = AcademicSession::findOrFail($id);
        return view('mad.academicSession.edit',$data);
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
        $request->validate([
            'session_name'=>'required',
            'start_date' =>'required',
            'end_date'=> 'required',
        ]);

        $data = $request->except('_token');

        $academicSession = AcademicSession::findOrFail($id);
        //update data into database
        $academicSession->update($data);
        session()->flash('message','Academic Session updated successfully');
        return redirect()->route('academicSession.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AcademicSession::destroy($id);
        session()->flash('message','Academic Session delete successfully');
        return redirect()->back();
    }
}
