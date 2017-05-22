@extends('layouts.user')

@section('title')
    {{--{{$user->name}}--}}
@endsection

@section('left_bar')

    @include('user.private.partials.left_bar_edit')

@endsection

@section('user_content')




    <div class="panel panel-default">
        <div class="panel-heading">Danger Zone</div>
        <div class="panel-body">

        </div>
    </div>





@endsection

@section('right_bar')

    @include('user.private.partials.right_bar_edit')

@endsection

@section('js')
    <script>
        $("#profile").click(function () {
            $("input[id='profile-image']").click();
        });
        $('#profile-image').change(function () {
            $('.profile-form').submit();
        });
    </script>

@endsection