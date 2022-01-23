<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fileupload;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function play($id){
        $savedfile = Fileupload::find($id);
        return view('pages/movie')->with('savedfile', $savedfile);
    }
}
