@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <div class="card">

                    <div class="card-title">
                        <center>
                            <h1 class="mt-3"> posts Manager</h1>
                        </center>
                        <h5 class="pull-right"><a href="pages/create" class="btn btn-success">Add Post</a></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <colgroup>
                                    <col width="2%">
                                    <col width="12%">
                                    <col width="15%">
                                    <col width="30%">
                                    <col width="10%">
                                    <col width="9%">
                                </colgroup>
                                <thead>

                                    <td>#</td>
                                    <td>Title</td>
                                    <td>Exerpt</td>
                                    <td>Body</td>
                                    <td>Created at</td>
                                    <td>Actions</td>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td> {{ $post->title }}</td>
                                            <td>{{ $post->exerpt }}</td>
                                            <td>{{ $post->body }}</td>
                                            <td>{{ $post->created_at }}</td>
                                            <td>
                                                <form id="delete-frm" class=""
                                                    action="{{ route('BlogPost.destroy', $post->id) }}" method="post">
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{ route('BlogPost.edit', $post->id) }}">Edit</a>
                                                    &nbsp;/&nbsp;
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger">Delete</button>
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
    </div>
@endsection
