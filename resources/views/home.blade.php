@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    {{$user->name}} you are logged in as {{$user->role->display_name}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
