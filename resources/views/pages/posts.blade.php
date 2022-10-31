@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="single">
                        <div class="about_img mt-3"><img src="/images/img-8.png"></div>
                        <br>
                        <p class="lorem_text">Posted On: {{ $posts->created_at }}
                        </p>
                        <h2 class="most_text">{{ $posts->title }}</h2>

                        {!! $posts->body !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
