@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <a href="{{ route('posts.create', app()->getLocale()) }}" class="btn btn-sm btn-primary mb-3">Create Post &rarr;</a>
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>

                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <a href="{{ route('posts.show',[app()->getLocale(), $post->id]) }}" class="btn btn-sm btn-outline-primary">View</a>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
