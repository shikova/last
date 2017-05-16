@extends('user.layout')

@section('user_content')

    <div class="panel panel-default">
        <div class="panel-heading">Edit Account</div>
        <div class="panel-body">
            {!! Form::model(Auth::user(),['id'=>'form','route'=>'user.update','method' => 'put','class'=>'form-horizontal']) !!}
            <div class="form-group">
                {{Form::label('name','Full Name :',['class'=>'col-md-3 control-label'])}}
                <div class="col-md-9">
                    {{Form::text('name',null,['class'=>'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('email','Email :',['class'=>'col-md-3 control-label'])}}
                <div class="col-md-9">
                    {{Form::text('email',null,['class'=>'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('about','About Me :',['class'=>'col-md-3 control-label'])}}
                <div class="col-md-9">
                    {{Form::textarea('about',null,['class'=>'form-control','minlength'=>'5','maxlength'=>'255'])}}
                </div>
            </div>

            <div class=" form-group">
                {{Form::submit('Save', ['class' => 'btn btn-success col-md-3 col-md-offset-8'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('rightbar')
    @include('user.partials.rightbar_edit')
@endsection
@section('js')
<script>


    jQuery( document ).ready(function($) {
        $("#form").submit( function() {
            $('<input />').attr('type', 'hidden')
                .attr('latitude', maps[0].markers[0].getPosition().lat())
                .attr('longitude', maps[0].markers[0].getPosition().lng())
                .appendTo('#form');
            return true;
        });
    });
    $(".cities_select").select2({
        maximumSelectionLength: 2
    });
</script>
@endsection