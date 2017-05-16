<div class="panel panel-default">
    <div class="panel-heading">Contact information</div>
    <div class="panel-body">
        {!! Form::model(Auth::user()->contact(),['id'=>'form','route'=>'user.update','method' => 'put','class'=>'form-horizontal']) !!}

        <div class="form-group">
            <label for="role" class="col-md-4 control-label">Ville</label>

            <div class="col-md-8">
                <select id="role" name="role" class="cities_select form-control">
                    @foreach($ville as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('address','Address:',['class'=>'fa fa-map-marker  col-md-4 control-label'])}}
            <div class="col-md-8">
                {{Form::textarea('address',null,['class'=>'form-control','rows'=>'4','maxlength'=>'100'])}}
            </div>
        </div>

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


        <div class=" form-group">
            {{Form::submit('Save', ['class' => 'btn btn-success col-md-4 col-md-offset-8'])}}
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div style="width: 100%; height: 350px;">
    {!! Mapper::render() !!}
</div>

