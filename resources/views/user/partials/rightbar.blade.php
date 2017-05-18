<div class="panel panel-default">
    <div class="panel-heading">Contact information</div>
    <div class="panel-body">
        <ul class="list-group">
            <li class="list-group-item">
                <i class="fa fa-map-marker fa-2x pull-left" aria-hidden="true"></i>
                {{$user->contact->address->street_address.' '.$user->contact->address->city->name.' '.$user->contact->address->city->zipcode}}
            </li>
            <li class="list-group-item">
                {{$user->contact->phone}}
                <i class="fa fa-phone fa-2x pull-left" aria-hidden="true"></i>
            </li>
            <li class="list-group-item">
                {{$user->contact->email}}
                <i class="fa fa-envelope-o fa-2x pull-left" aria-hidden="true"></i>
            </li>
            <li class="list-group-item">
                {{$user->contact->fax}}
                <i class="fa fa-fax fa-2x pull-left" aria-hidden="true"></i>
            </li>
            <li class="list-group-item ">
                <a target="_blank" href="https://fb.com/{{$user->contact->facebook}}"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a target="_blank"> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a target="_blank"> <i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a target="_blank"> <i class="fa fa-snapchat fa-2x" aria-hidden="true"></i></a>


            </li>
        </ul>
    </div>
</div>
