@extends('layouts.app')

@section('title', 'Blog Post')

@section('custom_css')
<style>
    .display-comment .display-comment {
        margin-left: 40px;
    }
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="{{ route('posts.index', app()->getLocale()) }}" class="btn btn-sm btn-primary mb-3">&larr; Go Back</a>
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $post->title }}</h3>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                        <p>{{ $post->content }}</p>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('comment.add', app()->getLocale()) }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="comment" class="form-control" placeholder="Add a comment">
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                            </div>
                            @auth
                                <button type="submit" class="btn btn-sm btn-outline-success">Comment</button>
                            @else
                                <a href="{{ route('login', app()->getLocale()) }}" class="btn btn-sm btn-primary">Login here</a>
                            @endauth
                        </form>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-header">All Comments ({{ count($post->comments) }})</div>
                    <div class="card-body">
                        {{-- @foreach($post->comments as $comment)
                            <div class="display-comment">
                                <strong>{{ $comment->user->name }}</strong>
                                <p>{{ $comment->body }}</p>
                            </div>
                        @endforeach --}}
                        @error('comment')
                            <span class="text-danger">* Please enter the field.</span>
                        @enderror
                        @if (session('success'))
                            <p class="alert alert-success my-2">{{ session('success') }}</p>
                        @endif

                        @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
