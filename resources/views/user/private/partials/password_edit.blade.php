<div class="panel panel-default">
    <div class="panel-heading">Update Password</div>
    <div class="panel-body">
        {!! Form::model(Auth::user(),['id'=>'form','route'=>'user.password','method' => 'put','class'=>'form-horizontal']) !!}

        <div class="form-group {{ $errors->has('old_password') ? ' has-error' : '' }}">
            {{Form::label('old_password','Old Password :',['class'=>'col-md-4 control-label'])}}
            <div class="col-md-8">
                <input name="old_password" type="password" value="" id="old_password" class="form-control">
                @if ($errors->has('old_password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            {{Form::label('password','New Password :',['class'=>'col-md-4 control-label'])}}
            <div class="col-md-8">
                <input name="password" type="password" value="" id="password" class="form-control">
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            {{Form::label('password_confirmation','Password Confirmation :',['class'=>'col-md-4 control-label'])}}
            <div class="col-md-8">
                <input name="password_confirmation" type="password" value="" id="password_confirmation" class="form-control">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class=" form-group">
            {{Form::submit('Save', ['class' => 'btn btn-success col-md-4 col-md-offset-8'])}}
        </div>
        {!! Form::close() !!}
    </div>
</div>