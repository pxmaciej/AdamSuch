<?php

namespace App\Http\Controllers;

use App\Models\Eventupload;
use Illuminate\Http\Request;

class EventuploadController extends Controller
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
        $event = $request->file('fileimg');
        $eventname = $event->getClientOriginalName();
        $eventname = time().'.'. $eventname;
        $eventtitle = $request->title;
        $eventbody = $request->body;
        $event->storeAs('public/events/', $eventname);

        Eventupload::create([
            'img_name' => $eventname,
            'title' => $eventtitle,
            'body' => $eventbody,
        ]);
        return back()->with('event_created', 'Wydarzenie zostało dodane!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventupload  $eventupload
     * @return \Illuminate\Http\Response
     */
    public function show(Eventupload $eventupload)
    {
        $savedevents = Eventupload::orderBy('id','DESC')->get();
        return view('pages/event')->with('savedevents', $savedevents);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventupload  $eventupload
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventupload $eventupload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventupload  $eventupload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventupload $eventupload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventupload  $eventupload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventupload $eventupload)
    {
        //
    }
}