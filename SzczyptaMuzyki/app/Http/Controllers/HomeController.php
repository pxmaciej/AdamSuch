<?php

namespace App\Http\Controllers;

use App\Models\Eventupload;
use App\Models\Fileupload;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $savedevent = Eventupload::orderBy('id','DESC')->get();
        $savedfile = Fileupload::orderBy('id','DESC')->get();
        return view('dashadmin')->with('savedfile', $savedfile)->with('savedevent', $savedevent);
    }
}
