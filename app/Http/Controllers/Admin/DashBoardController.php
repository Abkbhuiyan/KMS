<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mad.dashboard');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DashBoard  $dashBoard
     * @return \Illuminate\Http\Response
     */
    public function show(DashBoard $dashBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DashBoard  $dashBoard
     * @return \Illuminate\Http\Response
     */
    public function edit(DashBoard $dashBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DashBoard  $dashBoard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashBoard $dashBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DashBoard  $dashBoard
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashBoard $dashBoard)
    {
        //
    }
}
