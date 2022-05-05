@extends('layouts.app')

@section('title', 'Laravel Basic CRUD')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <a href="{{ route('games.create', app()->getLocale()) }}" class="btn btn-sm btn-primary mb-3">Create games &rarr;</a>

            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>

                @foreach ($games as $game)
                <tr>
                    <td>{{ $game->name }}</td>
                    <td>{{ number_format($game->price/100, 2) }}</td>
                    <td>
                        <a href="{{ route('games.show', [app()->getLocale(), $game->id]) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('games.edit', [app()->getLocale(), $game->id]) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('games.destroy' , [app()->getLocale(), $game->id]) }}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger" onclick="alert('Are You Sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>

            {{ $games->links() }}
        </div>
    </div>
</div>
@endsection
