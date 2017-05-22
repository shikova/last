
<div class="panel panel-default">
    <div class="panel-heading">Address</div>
    <div class="panel-body">
        {!! Form::model(Auth::user()->sp,['id'=>'form_address','route'=>'user.address','method' => 'put','class'=>'form-horizontal']) !!}

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

        <div class=" form-group">
            {{Form::submit('Save', ['class' => 'btn btn-success col-md-4 col-md-offset-8'])}}
        </div>
        {!! Form::close() !!}
    </div>
</div>

