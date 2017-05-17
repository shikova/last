<div class="panel panel-default">
    <div class="panel-heading">Contact information</div>
    <div class="panel-body">
        {!! Form::model(Auth::user()->contact,['id'=>'form','route'=>'user.contact','method' => 'put','class'=>'form-horizontal']) !!}

        <div class="form-group">
            {{Form::label('phone',' Phone :',['class'=>'fa fa-phone  col-md-4 control-label'])}}
            <div class="col-md-8">
                {{Form::text('phone',null,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('email',' Email :',['class'=>'fa fa-envelope  col-md-4 control-label'])}}
            <div class="col-md-8">
                {{Form::text('email',null,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('fax',' Fax :',['class'=>'fa fa-fax  col-md-4 control-label'])}}
            <div class="col-md-8">
                {{Form::text('fax',null,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('facebook',' Facebook :',['class'=>'fa fa-facebook-square  col-md-4 control-label'])}}
            <div class="col-md-8">
                {{Form::text('facebook',null,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('twitter',' Twitter :',['class'=>'fa fa-twitter-square  col-md-4 control-label'])}}
            <div class="col-md-8">
                {{Form::text('twitter',null,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('instagram',' Instagram :',['class'=>'fa fa-instagram  col-md-4 control-label'])}}
            <div class="col-md-8">
                {{Form::text('instagram',null,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('about','About:',['class'=>'fa fa-flag col-md-4 control-label'])}}
            <div class="col-md-8">
                {{Form::textarea('about',null,['class'=>'form-control','rows'=>'5','minlength'=>'5','maxlength'=>'100'])}}
            </div>
        </div>
        <div class=" form-group">
            {{Form::submit('Save', ['class' => 'btn btn-success col-md-4 col-md-offset-8'])}}
        </div>

        {!! Form::close() !!}
    </div>
</div>


