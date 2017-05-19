@extends('layouts.user')

@section('title')
    {{$user->name}}
@endsection

@section('left_bar')

    {{--@include('')--}}

@endsection

@section('user_content')

    <div class="panel panel-default">
        <div class="panel-body">
            <p>
                <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>
                {{$user->contact->about}}
            </p>
        </div>
    </div>
    <div style="width: 100%; height: 350px;">
        {!! Mapper::render() !!}
    </div>
@endsection


@section('right_bar')

    @include('user.public.rightbar')

@endsection
