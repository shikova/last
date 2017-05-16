<ul class="list-group">

    <li class="list-group-item">
        <a href="#">
            <img src="{{asset(Auth::user()->avatar)}}" class="icon-size img-thumbnail">
        </a></li>
    <li class="list-group-item">
        <a href="{{route('user.show',['username'=>Auth::user()->username])}}">Profile<span class="badge pull-right"></span>
        </a>
    </li>
    <li class="list-group-item">
        <a href="{{route('user.edit')}}">Account</a>
    </li>
    <li class="list-group-item">
        <a href="#">Danger-Zone
            <span class="glyphicon pull-right glyphicon-warning-sign"></span>
        </a>
    </li>
</ul>