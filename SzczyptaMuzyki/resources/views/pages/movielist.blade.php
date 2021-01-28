@extends('layouts.app')
@section('content')
<div class="container my-5 text-center">
     <div class="row">
  @forelse ($savedfile as $file)
     <div class="col-lg-4 col-md-6 col-sm-12">
           <div class="card">
                <img src="storage/{{$file->file_img}}" alt="MovieShot" class="card-img-top rounded img-thumbnail img-fluid" style="max-height:15em;">
                <div class="card-body">
                    <h5 class="card-title">{{$file->title}}</h5>
                    <p class="card-text">{{$file->body}}</p>
                    <a href="movie/{{$file->id}}" class="btn btn-primary">Go somewhere</a>
                </div>
        </div>
     </div>
  @empty
  @endforelse
     </div>
</div>
@endsection
