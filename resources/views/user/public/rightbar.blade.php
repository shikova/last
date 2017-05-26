<div class="panel panel-default">
    <div class="panel-heading">Contact information</div>
    <div class="panel-body">
        <ul class="list-group">
            <li class="list-group-item">
                <i class="fa fa-map-marker fa-2x fa-fw  pull-left" aria-hidden="true"></i>
                @if(empty($user->contact->address->street_address))
                    Address was not set
                @else
                    {{$user->contact->address->street_address.' '.$user->contact->address->city->name.' '.$user->contact->address->city->zipcode}}
                @endif
            </li>
            <li class="list-group-item">
                @if(empty($user->contact->phone))
                    Phone number was not set
                @else
                    {{$user->contact->phone}}
                @endif
                <i class="fa fa-phone fa-2x fa-fw  pull-left" aria-hidden="true"></i>
            </li>
            <li class="list-group-item">
                @if(empty($user->contact->email))
                    E-mail was not set
                @else
                    {{$user->contact->email}}
                @endif
                <i class="fa fa-envelope-o fa-2x fa-fw  pull-left" aria-hidden="true"></i>
            </li>
            <li class="list-group-item">
                @if(empty($user->contact->fax))
                    Fax number was not set
                @else
                    {{$user->contact->fax}}
                @endif

                <i class="fa fa-fax fa-2x fa-fw  pull-left" aria-hidden="true"></i>
            </li>
            <li class="list-group-item ">
                <a target="_blank" href="https://fb.com/{{$user->contact->facebook}}"><i
                            class="fa fa-facebook-official fa-2x fa-fw " aria-hidden="true"></i></a>
                <a target="_blank"> <i class="fa fa-twitter fa-2x fa-fw " aria-hidden="true"></i></a>
                <a target="_blank"> <i class="fa fa-instagram fa-2x fa-fw " aria-hidden="true"></i></a>
                <a target="_blank"> <i class="fa fa-youtube fa-2x fa-fw " aria-hidden="true"></i></a>
                <a target="_blank"> <i class="fa fa-snapchat fa-2x fa-fw " aria-hidden="true"></i></a>


            </li>
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">Slid Show</div>

    <div class="panel-body">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{asset('storage/doctor.jpg')}}" width="100%" alt="Image">
                </div>

                <div class="item">
                    <img src="{{asset('storage/dentist.jpg')}}" alt="Image">
                </div>
                <div class="item">
                    <img src="{{asset('storage/hospital.jpeg')}}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>