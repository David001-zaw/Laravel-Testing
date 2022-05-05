@extends('layouts.app')

@section('title', 'View Game Detail')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="{{ route('games.index', app()->getLocale()) }}" class="btn btn-sm btn-primary mb-3">&larr; Go Back</a>
            <ul class="list-group">
                <li class="list-group-item">Id &rarr; {{ $game->id }}</li>
                <li class="list-group-item">Name &rarr; {{ $game->name }}</li>
                <li class="list-group-item">Price &rarr; {{ $game->price }}</li>
                <li class="list-group-item">Created at &rarr; {{ $game->created_at->diffForHumans() }}</li>
                <li class="list-group-item">Updated at &rarr; {{ $game->updated_at->diffForHumans() }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
