@extends('user.layout')

@section('user_content')


    @include('user.partials.account_info_edit')
    @include('user.partials.address_edit')
@endsection

@section('rightbar')
    @include('user.partials.rightbar_edit')
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

    </script>
@endsection