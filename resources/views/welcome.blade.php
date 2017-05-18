@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-7 col-lg-7 ">
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
            <div class="col-sm-5">
                <div class="input-group" id="adv-search">
                    <input type="text" class="form-control" placeholder="Search for snippets" />
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="filter">Filter by</label>
                                            <select class="form-control">
                                                <option value="0" selected>All Snippets</option>
                                                <option value="1">Featured</option>
                                                <option value="2">Most popular</option>
                                                <option value="3">Top rated</option>
                                                <option value="4">Most commented</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="contain">Author</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label for="contain">Contains the words</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container text-center">
        <h3>What We Do</h3>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Current Project</p>
            </div>
            <div class="col-sm-3">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Project 2</p>
            </div>
            <div class="col-sm-3">
                <div class="well">
                    <p>Some text..</p>
                </div>
                <div class="well">
                    <p>Some text..</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="well">
                    <p>Some text..</p>
                </div>
                <div class="well">
                    <p>Some text..</p>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container text-center">
        <h3>Our Partners</h3>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 1</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 2</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 3</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 4</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 5</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 6</p>
            </div>
        </div>
    </div><br>

@endsection
