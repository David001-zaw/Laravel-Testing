

@extends('layout')

@section('title', 'Home Page')

@section('content')
<div class="container my-3">
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('component') }}">Blade Components</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('live-search') }}">Live Search with Ajax</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('email') }}">Laravel Mailing</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('contact') }}">Ajax Validation & Mailing</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
