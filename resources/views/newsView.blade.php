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
                    <div class="category">Категория {{$news->category_id}}</div>
                    <div class="viewCount">Эту новость смотрели {{$news->view_count}} раз</div>
                    <div class="tags">
                        @unless($newsTag->isEmpty())
                            <h5>Теги:</h5>
                            <ul>
                                @foreach($newsTag as $tag)
                                    <li>{{$tag}}</li>

                                @endforeach
                            </ul>

                        @endunless
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

