@extends('layouts.app')

@section('content')
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card">
        <div class="card-header">Edytuj Wydarzenie</div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('eventupload.update', $eventupload->id)}}">
                @csrf
                @method('PUT')
                @if(Session::has('event_edited'))
                     <h5 class="text-success">{{Session::get('event_edited')}}</h5>
                 @endif
                <div class="form-group">
                  <label for="title">Wprowadź Tytuł</label>
                  <input type="text" name='title' class="form-control" placeholder="Wprowadź tytuł" />
                </div>
                <div class="form-group">
                    <label for="start">Data Wydarzenia</label>
                    <input type="text" name='start' class="form-control" placeholder="11-02-2021" />
                  </div>
                  <div class="form-group">
                    <label for="time">Wprowadź Czas Wydarzenia</label>
                    <input type="text" name='time' class="form-control" placeholder="12:00 - 15:00" />
                  </div>
                  <div class="form-group">
                    <label for="location">Lokalizacja Wydarzenia</label>
                    <input type="text" name='location' class="form-control" placeholder="Online / Legnica" />
                  </div>
                <div class="form-group">
                  <label for="content">Wprowadź Krótki Opis</label>
                  <textarea name="content" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="body">Wprowadź Duży Opis</label>
                    <textarea name="body" class="form-control" rows="5"></textarea>
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlFile2">Wprowadź Obraz</label>
                  <input type="file" class="form-control-file" name="fileimg">
                </div>
                 <button type="submit" class="btn btn-primary">Edytuj Wydarzenie</button>
              </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
