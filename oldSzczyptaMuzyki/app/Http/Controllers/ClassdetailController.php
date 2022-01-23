<?php

namespace App\Http\Controllers;

use App\Models\Classdetail;
use Illuminate\Http\Request;

class ClassdetailController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classdetail  $classdetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classdetail::find($id);
        return view('pages/class-details')->with('class', $class);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classdetail  $classdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Classdetail $classdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classdetail  $classdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classdetail $classdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classdetail  $classdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classdetail $classdetail)
    {
        //
    }
}
