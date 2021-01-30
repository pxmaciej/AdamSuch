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
        $eventcontent = $request->content;
        $eventdate = $request->start;
        $eventtime = $request->time;
        $eventlocation = $request->location;

        $event->storeAs('public/events/', $eventname);

        Eventupload::create([
            'img_name' => $eventname,
            'title' => $eventtitle,
            'content' => $eventcontent,
            'body' => $eventbody,
            'start_date' => $eventdate,
            'time_event' => $eventtime,
            'location_event' => $eventlocation,
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
        return view('editevent', compact('eventupload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventupload  $eventupload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editedFile = Eventupload::find($id);
        $deletedImgname = $editedFile->img_name;
        $deletedImgepath = public_path('storage/events/'. $deletedImgname);
        unlink($deletedImgepath);
        $event = $request->file('fileimg');
        $eventname = $event->getClientOriginalName();
        $eventname = time().'.'. $eventname;
        $editedFile->title = $request->title;
        $editedFile->body = $request->body;
        $editedFile->content = $request->content;
        $editedFile->start_date = $request->start;
        $editedFile->time_event = $request->time;
        $editedFile->location_event = $request->location;
        $editedFile->img_name = $eventname;
        $editedFile->save();
        $event->storeAs('public/events/', $eventname);

        return back()->with('event_edited', 'Wydarzenie zostało Edytowane!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventupload  $eventupload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventupload $eventupload)
    {

        $editedFile = Eventupload::find($eventupload->id);
        $deletedImgname = $editedFile->img_name;
        $deletedImgepath = public_path('storage/events/'.$deletedImgname);
        unlink($deletedImgepath);
        $eventupload->delete();
        return back()->with('delete_success_event', 'Wydarzenie zostało Usunięte!');
    }
}
