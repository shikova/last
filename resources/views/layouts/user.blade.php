@extends('layouts.app')

@section('title')
    Profile
@endsection
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-2">

                @yield('left_bar')

            </div>

            <div class="col-md-6">

                @if($flash=session('message'))
                    <div class="alert {{session('alert-class')}}">
                        <strong>{{$flash}}</strong>
                    </div>

                @endif

                @yield('user_content')

            </div>

            <div class="col-md-4">

                @yield('right_bar')

            </div>
        </div>
    </div>
@endsection