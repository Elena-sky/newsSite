@extends('template')

@section('content')

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>
            <div class="col-sm-8 text-left">
                <div class="center-part">

                    @foreach (\App\Categories::limitNews($category->id) as $news)

                        <li>
                            <div class="date">
                                Дата                                        </div>
                            <div class="title">
                                <a href="{{route('newsViewPage',['id' => $news->id])}}">{{$news->name}}</a>
                            </div>
                        </li>
                    @endforeach;


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