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
                          <label for="exampleFormControlFile1">Podaj plik Vido</label>
                          <input type="file" class="form-control-file" name="uploadedfile">

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
                          <label for="exampleFormControlFile2">Wprowadź Obraz</label>
                          <input type="file" class="form-control-file" name="uploadedimg">
                        </div>
                         <button type="submit" class="btn btn-primary">Wyślij Film</button>
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
                          <label for="body">Wprowadź Opis</label>
                          <textarea name="body" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile2">Wprowadź Obraz</label>
                          <input type="file" class="form-control-file" name="fileimg">
                        </div>
                         <button type="submit" class="btn btn-primary">Dodaj Wydarzenie</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Lista Filmów</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-white">
                          <tr>
                            <th scope="col">Tytuł</th>
                            <th scope="col">Opis</th>
                            <th scope="col">Data Dodania</th>
                            <th scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($savedfile as $file)
                          <tr>
                            <td>{{$file->title}}</td>
                            <td>{{$file->body}}</td>
                            <td>{{$file->created_at}}</td>
                            <td>
                                <a href="{{ route('fileupload.edit',$file->id)}}"><button  type="submit" class="btn btn-warning">Edytuj</button></a>
                                <form action="{{ route('fileupload.destroy',$file->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger mt-1">Usuń</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista Wydarzeń</div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-white">
                              <tr>
                                <th scope="col">Tytuł</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Data Dodania</th>
                                <th scope="col">Edit</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($savedevent as $event)
                              <tr>
                                <td>{{$event->title}}</td>
                                <td>{{$event->body}}</td>
                                <td>{{$event->created_at}}</td>
                                <td>
                                    <a href="{{ route('eventupload.edit',$event->id)}}"><button class="btn btn-warning">Edytuj</button></a>
                                    <form action="{{ route('eventupload.destroy',$event->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button  type="submit" class="btn btn-danger mt-1">Usuń</button>
                                    </form>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
