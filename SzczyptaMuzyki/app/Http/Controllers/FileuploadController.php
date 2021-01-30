<?php

namespace App\Http\Controllers;

use App\Models\Fileupload;
use Illuminate\Http\Request;

class FileuploadController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $file = $request->file('uploadedfile');
        $filename = $file->getClientOriginalName();
        $filename = time().'.'. $filename;
        $filetitle = $request->title;
        $filebody = $request->body;
        $fileimg = $request->file('uploadedimg');
        $fileimg_name = $fileimg->getClientOriginalName();
        $fileimg_name = time().'.'.$fileimg_name;
        $file->storeAs('public', $filename);
        $fileimg->storeAs('public', $fileimg_name);

        Fileupload::create([
            'file_name' => $filename,
            'title' => $filetitle,
            'body' => $filebody,
            'file_img' => $fileimg_name,
        ]);
            return back()->with('movie_created', 'Film został dodany!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function show(Fileupload $fileupload)
    {
        $savedfile = Fileupload::orderBy('id','DESC')->get();
        return view('pages/movielist')->with('savedfile', $savedfile);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function edit(Fileupload $fileupload)
    {
       return view('editmovie', compact('fileupload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editedFile = Fileupload::find($id);
        $deletedFilename = $editedFile->file_name;
        $deletedFilepath = public_path('storage/'.$deletedFilename);
        unlink($deletedFilepath);
        $deletedImgname = $editedFile->file_img;
        $deletedImgepath = public_path('storage/'.$deletedImgname);
        unlink($deletedImgepath);

        $file = $request->file('editedfile');
        $filename = $file->getClientOriginalName();
        $filename = time().'.'. $filename;
        $filetitle = $request->title;
        $filebody = $request->body;
        $fileimg = $request->file('editedimg');
        $fileimg_name = $fileimg->getClientOriginalName();
        $fileimg_name = time().'.'.$fileimg_name;


        $editedFile->file_name = $filename;
        $editedFile->title = $filetitle;
        $editedFile->body = $filebody;
        $editedFile->file_img = $fileimg_name;
        $editedFile->save();

        $file->storeAs('public', $filename);
        $fileimg->storeAs('public', $fileimg_name);

        return back()->with('movie_edited', 'Film został Edytowany!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fileupload $fileupload)
    {

        $deleteFile = Fileupload::find($fileupload->id);
        $deletedFilename = $deleteFile->file_name;
        $deletedFilepath = public_path('storage/'.$deletedFilename);
        unlink($deletedFilepath);
        $deletedImgname = $deleteFile->file_img;
        $deletedImgepath = public_path('storage/'.$deletedImgname);
        unlink($deletedImgepath);
        $fileupload->delete();


        return back()->with('delete_success', 'Film został Usunięty!');
    }
}
