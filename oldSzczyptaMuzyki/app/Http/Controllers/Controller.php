<?php

namespace App\Http\Controllers;

use App\Models\Eventupload;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getEvent()
    {

        $savedevents = Eventupload::orderBy('id','DESC')->take(4)->get();
        return view('pages/home')->with('savedevents', $savedevents);
    }
}
