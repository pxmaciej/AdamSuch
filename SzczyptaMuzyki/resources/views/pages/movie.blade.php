@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row my-5">
      <div class="embed-responsive embed-responsive-21by9">
    <video controls>
        <source src="../storage/{{$savedfile->file_name}}" type="video/mp4">
    </video>
    </div>
  </div>

</div>

@endsection
