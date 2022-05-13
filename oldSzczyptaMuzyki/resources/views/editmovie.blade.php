@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edytuj Film</div>

            <div class="card-body">
<form method="POST" enctype="multipart/form-data" action="{{ route('fileupload.update',  $fileupload->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        @if(Session::has('movie_edited'))
            <h5 class="text-success">{{Session::get('movie_edited')}}</h5>
        @endif
      <label for="editedfile">Podaj plik FILMU</label>
      <input type="file" class="form-control-file" name="editedfile">
    </div>
    <div class="form-group">
      <label for="title">Wprowadź Tytuł</label>
      <input type="text" name='title' class="form-control" placeholder="Wprowadź tytuł" />
    </div>
    <div class="form-group">
      <label for="body">Wprowadź Opis</label>
      <textarea name="body" class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="editedimg">Wprowadź Obraz</label>
      <input type="file" class="form-control-file" name="editedimg">
    </div>
     <button type="submit" class="btn btn-primary">Edytuj Film</button>
</form>
            </div>
        </div>
    </div>
</div>
@endsection
