@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center py-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Dodaj Film</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('fileupload.store')}}">
                        @csrf
                        <div class="form-group">
                            @if(Session::has('movie_created'))
                            <h5 class="text-success">{{Session::get('movie_created')}}</h5>
                            @endif
                          <label for="exampleFormControlFile1">Podaj plik FILMU</label>
                          <input type="file" class="form-control-file" name="uploadedfile">

                        </div>
                        <div class="form-group">
                          <label for="title">Wprowadź Tytuł</label>
                          <input type="text" name='title' class="form-control" placeholder="Wprowadź tytuł" />
                        </div>
                        <div class="form-group">
                          <label for="body">Wprowadź Kontent</label>
                          <textarea name="body" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile2">Wprowadź OBRAZ</label>
                          <input type="file" class="form-control-file" name="uploadedimg">
                        </div>
                         <button class="btn btn-primary">Wyślij</button>
                      </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodaj Nowe Wydarzenie</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('eventupload.store')}}">
                        @csrf
                        <div class="form-group">
                          <label for="title">Wprowadź Tytuł</label>
                          <input type="text" name='title' class="form-control" placeholder="Wprowadź tytuł" />
                        </div>
                        <div class="form-group">
                          <label for="body">Wprowadź Kontent</label>
                          <textarea name="body" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile2">Wprowadź OBRAZ</label>
                          <input type="file" class="form-control-file" name="fileimg">
                        </div>
                         <button class="btn btn-primary">Wyślij</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
