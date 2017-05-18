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
        <div class=" form-group">
            {{Form::submit('Save', ['class' => 'btn btn-success col-md-3 col-md-offset-8'])}}
        </div>
        {!! Form::close() !!}
    </div>
</div>