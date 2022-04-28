@extends('layouts.app')

@section('title', 'Multiple Image Upload')

@section('custom_css')
<style>
    .gallery{
        width: 100%;
        max-height: 300px;
        object-fit: cover
    }
</style>
@endsection

@section('content')
    <div class="container">
        <a href="{{ route('home', app()->getLocale()) }}">&larr; Go Back</a>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center my-3">Multiple Images Upload</h1>

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Upload</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-0 gallery-container">
                        <img src="{{ asset('img/img10.jpeg') }}" class="img-fluid gallery" alt="">
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <div>
                            <a href="" class="btn btn-sm btn-outline-info">View</a>
                            <a href="" class="btn btn-sm btn-success">Download</a>
                        </div>
                        <div>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-outline-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
