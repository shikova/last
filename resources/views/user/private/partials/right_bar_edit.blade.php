<div class="panel panel-default">
    <div class="panel-heading">Contact information</div>
    <div class="panel-body">
        {!! Form::model(Auth::user()->contact,['id'=>'form','route'=>'user.contact','method' => 'put','class'=>'form-horizontal']) !!}

        <div class="form-group">
            {{Form::label('phone',' ',['class'=>'fa fa-phone fa-2x   col-md-2 control-label'])}}
            <div class="col-md-10">
                {{Form::text('phone',null,['class'=>'form-control','placeholder'=>'06 xx xx xx xx'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('email',' ',['class'=>'fa fa-envelope  col-md-2 fa-2x control-label'])}}
            <div class="col-md-10">
                {{Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('fax',' ',['class'=>'fa fa-fax fa-2x col-md-2 control-label'])}}
            <div class="col-md-10">
                {{Form::text('fax',null,['class'=>'form-control','placeholder'=>'05 xx xx xx xx'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('facebook',' ',['class'=>'fa fa-facebook-square fa-2x  col-md-2 control-label'])}}
            <div class="col-md-10">
                {{Form::text('facebook',null,['class'=>'form-control','placeholder'=>'Facebook Username'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('twitter',' ',['class'=>'fa fa-twitter-square fa-2x  col-md-2 control-label'])}}
            <div class="col-md-10">
                {{Form::text('twitter',null,['class'=>'form-control','placeholder'=>'Twitter Username'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('instagram',' ',['class'=>'fa fa-instagram fa-2x col-md-2 control-label'])}}
            <div class="col-md-10">
                {{Form::text('instagram',null,['class'=>'form-control','placeholder'=>'Instagram Username'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('youtube',' ',['class'=>'fa fa-youtube fa-2x col-md-2 control-label'])}}
            <div class="col-md-10">
                {{Form::text('youtube',null,['class'=>'form-control','placeholder'=>'Youtube Username'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::label('about',' ',['class'=>'fa fa-flag col-md-2 fa-2x control-label'])}}
            <div class="col-md-10">
                {{Form::textarea('about',null,['class'=>'form-control','placeholder'=>'about '.Auth::user()->name,'rows'=>'5','maxlength'=>'190'])}}
            </div>
        </div>
        <div class=" form-group">
            {{Form::submit('Save', ['class' => 'btn btn-success col-md-2 col-md-offset-10'])}}
        </div>

        {!! Form::close() !!}
    </div>
</div>


