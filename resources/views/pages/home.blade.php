@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="row">

                        @foreach ($post as $post)
                            <div class="col-md-6 mb-3">
                                <div class="blog-post">
                                    <div class="card-img"><img src="images/img-8.png" alt="Blog img"
                                            style="width: 600px; height:400px"></div>
                                    <p class="lorem_text">Posted On: {{ $post->created_at }}
                                    </p>
                                    <h2 class="most_text"><a href="/pages/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                                    <div class="card-body">
                                        <p class="lorem_text">{{ $post->exerpt }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
