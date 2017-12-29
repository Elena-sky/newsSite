@extends('template')

@section('content')

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 ">
                @foreach($leftAdvertising as $advertising)
                <div class="well">

                    <p>{{$advertising->name}}</p>
                    <br>
                    {{$advertising->prise}}
                    <br>
                    <a href="{{$advertising->company}}">Купить можно здесь</a>
                </div>
                @endforeach
            </div>
            <div class="col-sm-8 text-left">
                <div class="center-part">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php $item_class = ' active'; ?>
                            @foreach($lastNewsSlide as $news)
                                <div class="item <?= $item_class ?>">

                                    <?php $item_class = ''; /* убираем 'active' для следующих */ ?>
                                    <div>
                                        <div class="col-sm-6 col-sm-offset-2">
                                            <h3><a href="{{route('newsViewPage',['id' => $news->id])}}">{{$news->name}}</a></h3>
                                        </div>

                                        <div class="col-sm-4" >
                                            @if(!empty($news->newsImg)):
                                            <img style="width: 200px" src="{{ asset("/uploads/news/".$news->newsImg[0]->filename) }}" alt="">
                                            @endif;
                                        </div>


                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                    @foreach(\App\Categories::all() as $category)
                        <div class="category">
                            <h3 class="text-normal"><a class="nav-link"
                                                       href="{{route('categoryViewPage',['id' => $category->id])}}">{{$category->name}}</a>
                            </h3>
                            <ul>
                                @foreach (\App\Categories::limitNews($category->id) as $news)
                                    <li>
                                        <div class="date">
                                            {{$news->data}}
                                        </div>
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
            <div class="col-sm-2 ">
                @foreach($rightAdvertising as $advertising)
                    <div class="well">

                        <p>{{$advertising->name}}</p>
                        <br>
                        {{$advertising->prise}}
                        <br>
                        <a href="{{$advertising->company}}">Купить можно здесь</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

