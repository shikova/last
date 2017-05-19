<div class="panel panel-default">
    <div class="panel-heading">Edit Account</div>
    <div class="panel-body">
        {!! Form::model(Auth::user(),['id'=>'form','route'=>'user.update','method' => 'put','class'=>'form-horizontal']) !!}
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {{Form::label('name','Full Name :',['class'=>'col-md-3 control-label'])}}
            <div class="col-md-9">
                {{Form::text('name',null,['class'=>'form-control'])}}
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {{Form::label('email','Email :',['class'=>'col-md-3 control-label'])}}
            <div class="col-md-9">
                {{Form::text('email',null,['class'=>'form-control'])}}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            {{Form::label('password','Password :',['class'=>'col-md-3 control-label'])}}
            <div class="col-md-9">
                <input name="password" type="password" value="" id="password" class="form-control">
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class=" form-group">
            {{Form::submit('Save', ['class' => 'btn btn-success col-md-3 col-md-offset-8'])}}
        </div>
        {!! Form::close() !!}
    </div>
</div>