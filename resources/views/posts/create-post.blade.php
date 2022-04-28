@extends('layouts.app')

@section('title', 'Create New Post')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                <a href="{{ route('posts.index', app()->getLocale()) }}" class="btn btn-sm btn-primary mb-3">&larr; Go Back</a>
                <div class="card">
                    <div class="card-header">
                        <h3>Create New Post</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.store', app()->getLocale()) }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Content</label>
                                <textarea name="content" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
