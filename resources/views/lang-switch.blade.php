@extends('layouts.app')

@section('title', 'Language Switching')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="dropdown my-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    @if (app()->getLocale() == 'en')
                        English
                    @elseif (app()->getLocale() == 'es')
                        Spanish
                    @elseif (app()->getLocale() == 'my')
                        Myanmar
                    @elseif (app()->getLocale() == 'jp')
                        Japanese
                    @endif

                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    {{-- <li><a class="dropdown-item" href="{{ url(app()->getLocale() == 'es' ? 'en' : 'es') }}">{{ app()->getLocale() == 'es' ? 'English' : 'Spanish' }}</a></li> --}}
                    <li><a href="{{ route(Route::currentRouteName(), 'en') }}" class="dropdown-item">English</a></li>
                    <li><a href="{{ route(Route::currentRouteName(), 'es') }}" class="dropdown-item">Spanish</a></li>
                    <li><a href="{{ route(Route::currentRouteName(), 'my') }}" class="dropdown-item">Myanmar</a></li>
                    <li><a href="{{ route(Route::currentRouteName(), 'jp') }}" class="dropdown-item">Japanese</a></li>
                </ul>
            </div>

            {{-- <h1>@lang('auth.title')</h1> --}}
            <h1>{{ __('title') }}</h1>
        </div>
        <h1>{{ __('test_title') }}</h1>
        <a href="{{ route('home', app()->getLocale()) }}" class="btn btn-sm btn-primary">&larr; Go Back</a>
    </div>

@endsection
