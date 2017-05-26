<ul class="list-group">

    <li class="list-group-item">
        <img src="{{asset(Auth::user()->avatar)}}" class="icon-size img-thumbnail">
        <a href="{{route('user.show',['username'=>Auth::user()->username])}}">{{Auth::user()->name}}<span
                    class="badge pull-right"></span>
        </a>
    </li>

</ul>