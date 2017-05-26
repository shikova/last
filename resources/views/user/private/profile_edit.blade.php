@extends('layouts.user')

@section('title')
    {{--{{$user->name}}--}}
@endsection

@section('left_bar')

    @include('user.private.partials.left_bar_edit')

@endsection

@section('user_content')

    @include('user.private.partials.address_edit')

@endsection


@section('right_bar')

    @include('user.private.partials.right_bar_edit')

@endsection

@section('js')
    <script>
        jQuery(document).ready(function ($) {
            $("#form_address").submit(function () {
                $('input[name=latitude]').val(maps[0].markers[0].getPosition().lat());
                $('input[name=longitude]').val(maps[0].markers[0].getPosition().lng());
                return true;
            });
        });
        $(".cities_select").select2({
            maximumSelectionLength: 2
        });
        $(".spec_multiple").select2();

        $("#profile").click(function() {
            $("input[id='profile-image']").click();
        });
        $('#profile-image').change(function(){
            $('.profile-form').submit();
        });
    </script>
@endsection