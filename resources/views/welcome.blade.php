@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">

        <h1 class="display-5 fw-bold">
            Welcome to <span class="text-danger">{{ config('app.name', 'Laravel') }}</span>
        </h1>

        <p class="col-md-8 fs-4">Log in to the platform in order to access to your Ticket Manager Dashboard.</p>

    </div>
</div>

@endsection
