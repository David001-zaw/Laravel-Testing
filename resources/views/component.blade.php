
@extends('layouts.app')

@section('title', 'Blade Components')

@section('content')
    <x-title>Alert Components (class based component)</x-title>
    <div class="container">
        {{-- <x-alert type="alert-danger" message="Danger Alert Message" />
        <x-alert type="alert-success" message="Success Alert Message" /> --}}

        {{-- <x-alert type="error">
            Danger Alert  Message from slot
        </x-alert>
        <x-alert type="success">
            Success Alert  Message from slot
        </x-alert> --}}

        <x-alert type="error" data-id="10" class="custom-class">
            Check attributes from console
        </x-alert>
        <x-alert>
            Attributes with default values
        </x-alert>
    </div>

    <x-title>Components with SubFolders</x-title>
    <div class="container">
        <x-button value="First Button" class="btn-primary" />
        <x-button value="Second Button" class="btn-success" />
        <x-ui.button value="Third Button" class="btn-danger" />

        <div class="row">
            <div class="col-md-5">
                <x-input type="text" label="Username" />
                <x-input type="password" label="Password" />
            </div>
        </div>
    </div>

    <x-title>Posts Components</x-title>
    <div class="container">
        <div class="row">
            <x-posts :posts="$posts" />
        </div>
    </div>

    <x-title>Anonymous Components & x-slot</x-title>
    <div class="container mb-3">
        <x-ui.badge name="Profile" count="99" class="btn-success"></x-ui.badge>
        <x-badge name="Inbox" count="10" class="btn-primary"></x-badge>
        <x-badge name="Comments" count="5" class="btn-info"></x-badge>
    </div>
    <div class="container">
        <div class="row g-3">

            @for ($i = 0; $i < 3; $i++)
            <x-card>
                <x-slot name="image">
                    <img src="{{ asset('img/img10.jpeg') }}" class="card-img-top img-fluid w-100" alt="...">
                </x-slot>

                <x-slot name="title" class="text-primary">
                    How to make responsive website
                </x-slot>

                <x-slot name="content">
                    Eveniet non labore neque quos voluptatibus sunt illo maiores repudiandae esse quo reiciendis, quibusdam accusantium consequuntur asperiores?
                </x-slot>

                <x-slot name="actions">
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                    <a href="#" class="btn btn-info float-end">Detail</a>
                </x-slot>
            </x-card>
            @endfor

        </div>
    </div>


    <x-title>Final Testing</x-title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-table class="border-primary table-striped">
                    <x-slot name="heading">
                        <x-table.heading>Name</x-table.heading>
                        <x-table.heading>Email</x-table.heading>
                        <x-table.heading>Actions</x-table.heading>
                    </x-slot>

                    @for ($i = 0; $i < 3; $i++)
                        <x-table.row>
                            <x-table.cell>David Zaw</x-table.cell>
                            <x-table.cell>david@gmail.com</x-table.cell>
                            <x-table.cell>
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </x-table.cell>
                        </x-table.row>
                    @endfor

                </x-table>
            </div>
        </div>
    </div>

    <x-title></x-title>
@endsection
