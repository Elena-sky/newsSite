@extends('template')

@section('content')

    <script>
        $(document).ready(function () {
            $('ul.first').bsPhotoGallery({
                "classes": "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
                "hasModal": true,
                // "fullHeight" : false
            });
        });
    </script>
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>
            <div class="col-sm-8 text-left">
                <div class="center-part">
                    <h3>{{$news->name}}</h3>
                    <div class="date">{{$news->created_at}}</div>
                    <div class="description">{{$news->description}}</div>
                    <div>
                        <ul class="row first">
                            @foreach($images as $image)
                                <li>
                                    <img src="{{ asset("/uploads/news/$image->filename") }}" width="500px"
                                         alt="{{$image->id}}">
                                </li>
                            @endforeach

                        </ul>
                        {{--<div class="col-sm-4">--}}
                        {{--<img src="{{ asset("/uploads/news/$image->filename") }}" width="500px"--}}
                        {{--alt="{{$image->id}}">--}}
                        {{--</div>--}}
                    </div>
                    <div class="category">{{$news->category_id}}</div>


                </div>

                <hr>

            </div>
            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
        </div>
    </div>
@endsection

