@extends('layouts.app')

@section('title')
    Profile
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">

                @include('user.partials.leftbar')

            </div>
            <div class="col-md-6">
                @yield('user_content')
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
@endsection