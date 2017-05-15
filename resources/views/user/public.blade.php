@extends('layouts.app')

@section('title')
    {{$user->name}}
@endsection
@section('content')

    <div class="container">
        <div class="row">

            {!! $user->isAdmin()!!}
            {!! $user->isNormal()!!}
            {!! $user->isPro()!!}

        </div>
    </div>


@endsection