<?php

namespace App\Http\Controllers;

use App\Models\Eventupload;
use Illuminate\Http\Request;

class EventDetailController extends Controller
{
    public function detailEvent($id)
    {

        $event = Eventupload::find($id);
        return view('pages/event-details')->with('event', $event);
    }
}
