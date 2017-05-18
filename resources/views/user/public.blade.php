@extends('user.layout')

@section('title')
    {{$user->name}}
@endsection
@section('user_content')

    <div class="panel panel-default">
        <div class="panel-heading">About : {{$user->name}}</div>
        <div class="panel-body">
            <p>{{$user->contact->about}}</p>
        </div>
    </div>
    <div style="width: 100%; height: 350px;">
        {!! Mapper::render() !!}
    </div>

@endsection
@section('rightbar')
    @include('user.partials.rightbar')
@endsection