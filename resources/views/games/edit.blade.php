@extends('layouts.app')

@section('title', 'Edit Game Info')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            <a href="{{ route('games.index', app()->getLocale()) }}" class="btn btn-sm btn-primary mb-3">&larr; Go Back</a>
            <div class="card">
                <div class="card-header">
                    <h3>Edit Game Info</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('games.update', [app()->getLocale(), $game->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $game->name) }}">
                            @error('name')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Price</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $game->price) }}">
                            @error('price')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Game</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
