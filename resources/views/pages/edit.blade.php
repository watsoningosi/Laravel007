@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="form">
                    <div id="page">
                        <h1>Update Article </h1>
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form method="post" action="/pages/posts/{{ $post->id }}">
                            @csrf
                            @method('put')

                            <div class="form-group mb-3">
                                <label class="control-label" for="">Title</label>
                                <input class="form-control" type="text" name="title" value="{{ $post->title }}"
                                    id="title">
                            </div>

                            <div class="form-group mb-3">
                                <label class="control-label" for="">Excerpt</label>
                                <input class="form-control" type="text" name="exerpt" id="exerpt"
                                    value="{{ $post->exerpt }}">
                            </div>

                            <div class="form-group mb-3">
                                <label class="control-label">Body </label>
                                <textarea name="body" cols="19" rows="6" class="form-control">{{ $post->body }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
