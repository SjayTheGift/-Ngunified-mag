@extends('user.app')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('main-content')
<ul class="owl-carousel slide" id="owl-demo">
    <li class="slide__item">
        <img src="{{ asset('user/img/index_slider/pic01.jpg')}}" />
        <h2 class="slider-caption">Article 1</h2>
    </li>

    <li class="slide__item">
        <img src="{{ asset('user/img/index_slider/pic02.jpg')}}" />
    </li>

    <li class="slide__item">
        <img src="{{ asset('user/img/index_slider/pic03.jpg')}}" />
    </li>
</ul>

<div class="row" id="app">
    <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="panel-group">
            <div class="panel panel-custom">
                <div class="panel-heading panel-heading-custom">Recent</div>
                
                @foreach ($posts as $post)

                <div class="row story-margins">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <img src="{{Storage::disk('local')->url($post->image) }}" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <a href="{{ route('post',$post->slug)}}"
                        <h3 class="post-header">{{$post->title}}</h3>
                        </a>
                        <p> {!! htmlspecialchars_decode($post->body) !!}</p>
                        <ul class="comment-section">
                            <li><a href="#">
                                    <img src="{{ asset('user/img/icons/comment_icon.gif')}}" />
                                </a>
                            </li>
                            <li><a href="#">
                                    <small>0</small>
                                    <img src="{{ asset('user/img/icons/kif.png')}}" />
                                </a>
                            </li>
                            <li><a href="#">Share</a></li>
                        </ul>
                    </div>

                </div>
                
                @endforeach
                
                <posts title="mamm"></posts>

                <hr>
                <!--Pager-->
                <ul class="pager">
                    <li class="next">
                        {{ $posts->links() }}
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <!--SideBar-->
    <div class="col-xs-12 col-sm-12 col-md-4 hidden-xs hidden-sm ">
        <div class="panel-group">
            <div class="panel panel-custom">
                <div class="panel-heading panel-heading-custom">News</div>
                <div class="col-xs-12">
                    <div class="news-article-container">
                        <h5><strong>A GENT NAMED JIMMY</strong></h5>
                        <p class="para-news">New psychedelic-folk-blues duo Dave & Duncan have just released their second 
                            demo album
                        </p>
                        <h5><strong>A GENT NAMED JIMMY</strong></h5>
                        <p class="para-news">New psychedelic-folk-blues duo Dave & Duncan have just released their second 
                            demo album
                        </p>
                    </div>
                    <div class="img_ad300x250">

                    </div>

                    <div class="img_ad278x76">

                    </div>

                    <div class="img_ad300x600">

                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--End Sidebar-->

</div>

</div>

@endsection

@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>
@endsection