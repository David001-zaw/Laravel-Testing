

@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="container my-3">
    <div class="row g-3">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('lang-switch', app()->getLocale()) }}">Language Switching</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('games.index', app()->getLocale()) }}">Laravel Basic Crud</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('component', app()->getLocale()) }}">Blade Components</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('live-search', app()->getLocale()) }}">Live Search with Ajax</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('email', app()->getLocale()) }}">Laravel Mailing</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('contact', app()->getLocale()) }}">Ajax Validation & Mailing</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('photo.index', app()->getLocale()) }}">Multiple Image/File Upload with Permission</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ route('posts.index', app()->getLocale()) }}">Polymorphic Relation Comments</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
