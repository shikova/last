<ul class="list-group">

    <li class="list-group-item">
        {!! Form::open(array('route'=>'user.avatar','files'=>true,'class'=>'profile-form' , 'methode'=>'put')) !!}
        <img id="profile" src="{{asset(Auth::user()->avatar)}}" class="icon-size img-thumbnail">

        {!! Form::file('avatar', array('id'=>'profile-image' , 'class'=>'hidden')) !!}

        {!! Form::submit('Save',array('style'=>'display:none')) !!}
        {!! Form::close() !!}
    </li>

    <li class="list-group-item">
        <a href="{{route('user.show',['username'=>Auth::user()->username])}}">Profile<span
                    class="badge pull-right"></span>
        </a>
    </li>
    <li class="list-group-item">
        <a href="{{route('user.edit.profile')}}">Profile Settings</a>
    </li>
    <li class="list-group-item">
        <a href="{{route('user.edit.account')}}">Account Settings</a>
    </li>
    <li class="list-group-item">
        <a href="{{route('user.edit.password')}}">Update Password
        </a>
    </li>
    <li class="list-group-item">
        <a href="#">Danger-Zone
        </a>
    </li>
</ul>