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
                    @foreach(\App\Categories::all() as $category)
                        <div class="category">
                            <h3 class="text-normal"><a class="nav-link"
                                                       href="{{route('categoryViewPage',['id' => $category->id])}}">{{$category->name}}</a></h3>
                            <ul>
                                @foreach (\App\Categories::limitNews($category->id) as $news)
                                    <li>
                                        <div class="date">
Дата                                        </div>
                                        <div class="title">
                                            <a href="{{route('newsViewPage',['id' => $news->id])}}">{{$news->name}}</a>
                                        </div>
                                    </li>
                                @endforeach;

                            </ul>
                        </div>
                    @endforeach;

                </div>
                <h1>Welcome</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <hr>
                <h3>Test</h3>
                <p>Lorem ipsum...</p>
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

