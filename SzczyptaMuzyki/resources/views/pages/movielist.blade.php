@extends('layouts.app')
@section('content')
<div class="container my-5 text-center">
     <div class="row">
  @forelse ($savedfile as $file)
     <div class="col-md-2">
           <div class="card">
                <img src="storage/{{$file->file_img}}" alt="MovieShot" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{$file->title}}</h5>
                    <p class="card-text">{{$file->body}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
        </div>
     </div>
  @empty
  @endforelse
     </div>
</div>
@endsection
