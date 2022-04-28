@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p>Thank for contact with us. We'll be touch you asap. So... Please wait for our response with patient. Lorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, temporibus?</p>
                        <a href="{{ route('email', app()->getLocale()) }}">&larr; Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
