<?php

namespace App\Http\Controllers;

use App\Models\Departemant;
use Illuminate\Http\Request;

class DepartemantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departemants = Departemant::with('employee','leader')->get();

        // dd($departemant);

        return view('dashboard.admin.departemant.index',['departemants' => $departemants]);
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
     * @param  \App\Models\Departemant  $departemant
     * @return \Illuminate\Http\Response
     */
    public function show(Departemant $departemant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departemant  $departemant
     * @return \Illuminate\Http\Response
     */
    public function edit(Departemant $departemant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departemant  $departemant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departemant $departemant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departemant  $departemant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departemant $departemant)
    {
        //
    }
}
