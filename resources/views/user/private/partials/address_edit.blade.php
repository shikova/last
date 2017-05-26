
<div class="panel panel-default">
    <div class="panel-heading">public informations</div>
    <div class="panel-body">
        {!! Form::model(Auth::user()->contact->address,['id'=>'form_address','route'=>'user.address','method' => 'put','class'=>'form-horizontal']) !!}

        <div class="form-group">
            <label for="specialities" class="col-md-4 control-label">Specialities</label>

            <div class="col-md-8 ">
                <select name="specialities" id="specialities" class="form-control spec_multiple" multiple="multiple">
                    @foreach($data['specialities'] as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="city_id" class="col-md-4 control-label">Ville</label>

            <div class="col-md-8 ">
                <select id="city_id" name="city_id" class="form-control cities_select">
                    @foreach($data['ville'] as $value)
                        @if(Auth::user()->contact->address->city_id===$value->id)
                            <option value="{{$value->id}}" selected>{{$value->name}}</option>
                        @else
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('street_address','Address:',['class'=>'col-md-4 control-label'])}}
            <div class="col-md-8">
                {{Form::textarea('street_address',null,['class'=>'form-control','rows'=>'3','maxlength'=>'100'])}}
            </div>
        </div>
        {{ Form::hidden('latitude', '') }}
        {{ Form::hidden('longitude', '') }}

        <div style="width: 100%; height: 350px;">
            {!! Mapper::render() !!}
        </div>
        <div class=" form-group">
            {{Form::submit('Save', ['class' => 'btn btn-success col-md-4 col-md-offset-8'])}}
        </div>
        {!! Form::close() !!}
    </div>
</div>

