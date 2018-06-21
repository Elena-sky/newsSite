@extends('template')

@section('content')

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                @if(!empty($rightAdvertising))
                    @foreach($rightAdvertising as $advertising)
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
                                <span>Купон на скидку  - {{rand(989070, 6989898)}}
                                    – примените и получите скидку 10%</span>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-sm-8 text-left">
                <div class="center-part">
                    <h2>{{$category->name}}</h2>

                    @foreach ($newsByCategory as $news)
                        <li>
                            <div class="title">
                                <a href="{{route('newsViewPage',['id' => $news->id])}}">{{$news->name}}</a>
                            </div>
                        </li>
                    @endforeach

                    {{$newsByCategory->links()}}
                </div>

                <hr>

            </div>
            <div class="col-sm-2 sidenav">
                @if(!empty($rightAdvertising))
                    @foreach($rightAdvertising as $advertising)
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
                                <span>Купон на скидку  - {{rand(989070, 6989898)}}
                                    – примените и получите скидку 10%</span>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection