@extends('user.app')

@section('main-content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=2095671617312755&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="panel-group">
            <div class="panel panel-custom">   
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <img src="{{Storage::disk('local')->url($post->image) }}" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" id="post-text-container">
                        <h3 class="post-header">{{$post->title}}</h3>
                        <p class="created_at">Created at {{ $post->created_at }}</p>
                        <p> {{ strip_tags($post->body) }}</p>
                        <ul class="comment-section">
                            <li></li>
                        </ul>
                        <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


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

                    
                </div>
            </div>
        </div>
    </div>


</div>

</div>

@endsection