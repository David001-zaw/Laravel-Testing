
@extends('layouts.app')

@section('title', 'Laravel Mailing')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8 offset-md-2">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="card-title">Email Form</h3>
                    </div>
                    <div class="card-body">
                        <form id="contact-form" action="{{ route('email.store', app()->getLocale()) }}" method="POST" autocomplete="off">
                            @csrf
                            <div id="res" class="d-none">
                                <ul class="list-unstyled text-white"></ul>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name') <span class="text-danger">* {{ $message }}</span> @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control" id="email" name="email">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small><br>
                                @error('email') <span class="text-danger">* {{ $message }}</span> @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">Message</label>
                                <textarea name="message" id="message" class="form-control" placeholder="How can we help you?"></textarea>
                                @error('message') <span class="text-danger">* {{ $message }}</span> @enderror
                            </div>

                            <button type="submit" id="btn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
</body>
</html>
