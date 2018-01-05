@extends('template')

@section('content')
    <style>
        .myHover {
            border: 1px;
            border-color: #269abc;
        }

        .coupon {
            display: none;
            margin-right: -350px;
            padding: 10px;
            margin-top: 50px;
            background: #f3f3f3;
            height: 60px;
            -moz-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
        }

        .myHover:hover .coupon {
            display: block;
            position: absolute;
            top: 120px;
            z-index: 9999;
            width: 300px;
            background-color: gold;
        }

        .myHover:hover .price {
            font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
            font-size: 15px;
            color: red
        }

        .discount {
            display: none;
        }

        .myHover:hover .discount {
            display: block;
        }

        .titleAd {
            font-family: "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 10px;
        }


    </style>
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 ">
                @foreach($leftAdvertising as $advertising)
                    <div class="well myHover">
                        <p class="titleAd">{{$advertising->name}}</p>
                        <br>
                        <div class="price">Цена: {{$advertising->prise}} грн
                            <div class="discount">Со скидкой - {{$advertising->prise*0.9}} грн</div>
                        </div>
                        <br>

                        <div><a href="{{$advertising->company}}">Купить можно здесь</a></div>
                        <br>
                        <div class="coupon">
                            <span>Купон на скидку  - {{rand(989070, 6989898)}} – примените и получите скидку 10%</span>
                        </div>
                    </div>



                @endforeach


            </div>
            <div class="col-sm-8 text-left">
                <div class="center-part">

                    {{--Всплывающее окно на подписку--}}
                    <div>
                        <div id="bg_popup">
                            <div id="popup">
                                <a id="setCookie" class="close" href="#" title="Закрыть"
                                   onclick="document.getElementById('bg_popup').style.display='none'; return false;">X</a>
                                <h1>Подписка на обновления</h1>

                                <p>Разрешите сайту *** отправлять вам уведомления о выходе новых статей</p>
                            </div>
                        </div>
                    </div>

                    <script>

                    </script>
                    {{--Всплывающее окно на закрытие сайта--}}
                    <div id="cls_ctnr">
                        <div id="cls_pop">
                            <span class="cls_close" onclick="document.getElementById('cls_ctnr').style.display='none'; return false;">X</span>
                            <h4>Уведомление</h4>
                            Вы действительно хотите покинуть сайт?
                        </div>
                    </div>


                    {{--слайды--}}
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
                                            <h3>
                                                <a href="{{route('newsViewPage',['id' => $news->id])}}">{{$news->name}}</a>
                                            </h3>
                                        </div>

                                        <div class="col-sm-4">
                                            @if(!empty($news->newsImg) && isset($news->newsImg[0]))

                                                <img style="width: 200px"
                                                     src="{{ asset("/uploads/news/".$news->newsImg[0]->filename) }}"
                                                     alt="">
                                            @endif
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

