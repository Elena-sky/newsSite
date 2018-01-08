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
                @if(!empty($leftAdvertising))
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
                                <span>Купон на скидку  - {{rand(989070, 6989898)}}
                                    – примените и получите скидку 10%</span>
                            </div>
                        </div>
                    @endforeach
                @endif
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
                                    <img src="{{ secure_asset("/uploads/news/$image->filename") }}" width="500px"
                                         alt="{{$image->id}}">
                                </li>
                            @endforeach

                        </ul>

                    </div>
                    <div class="category">Категория {{$news->category_id}}</div>
                    <div class="viewCount">Эту новость смотрели {{$news->view_count}} раз</div>
                    <div class="tags">
                        @if(!empty($newsTag))
                            <h5>Теги:</h5>
                            <ul>
                                @foreach($newsTag as $id => $tag)
                                    <li><a href="{{route('tagPage', [$id])}}">{{$tag}}</a></li>
                                @endforeach
                            </ul>

                        @endif
                    </div>


                    <div id="disqus_thread"></div>
                    <script>

                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                         var disqus_config = function () {
                         this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                         };
                         */
                        (function () { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://newssite-2.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by Disqus.</a></noscript>


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

