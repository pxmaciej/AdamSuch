@extends('layouts.app')
@section('content')
<section class="event-page-section">
    <div class="container">
        <div class="row">
            @forelse ($savedfile as $file)
                <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                        <div class="event-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="movie/{{$file->id}}">
                                        <img src="storage/{{$file->file_img}}" alt="">
                                    </a>
                                </figure>
                                <div class="content-box">
                                    <div class="date">
                                        {{ \Carbon\Carbon::parse($file->created_at)->format('d/m/Y')}}
                                    </div>
                                    <h3>
                                        <a href="movie/{{$file->id}}">
                                        {{$file->title}}
                                        </a>
                                    </h3>
                                    <div class="text">
                                        {{$file->body}}
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                @empty
            @endforelse
        </div>
    </div>
</section>

@endsection
