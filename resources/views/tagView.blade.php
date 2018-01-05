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
                    <h2>Все новости по : {{$tag->name}}</h2>

                    @foreach ($newsByTag as $news)
                        <li>
                            <div class="date">
                                Дата
                            </div>
                            <div class="title">
                                <a href="{{route('newsViewPage',['id' => $news->id])}}">{{$news->name}}</a>
                            </div>
                        </li>
                    @endforeach


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

