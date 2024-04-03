@extends('layouts.app')
@section('main-content')

<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Profile') }}
    </h2>
    <div class="card p-4 mb-4 bg-white shadow rounded-lg">

        @include('auth.profile.partials.update-profile-information-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('auth.profile.partials.update-password-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('auth.profile.partials.delete-user-form')

    </div>
</div>

@endsection
