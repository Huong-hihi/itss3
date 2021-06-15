@extends('layout_user')
@section('content')

<!--? slider Area Start-->
<section class="slider-area ">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInLeft" data-delay="0.2s">漫画<br> 共有</h1>
                            <p data-animation="fadeInLeft" data-delay="0.4s">私たちに漫画の面白いことを共有しましょう。</p>
                            @if (!session('status') && !auth()->user())
                            <a href="{{ URL::to('/register') }}" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">参加して共有</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ? services-area -->

<div class="services-area">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services mb-30">
                    <div class="features-icon">
                        <img src="{{asset('/user/img/icon/icon1.svg')}}" alt="">
                    </div>
                    <div class="features-caption">
                        <h3>毎日60以上の投稿があります。</h3>
                        <p>私たちは漫画についての体験を共有します。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services mb-30">
                    <div class="features-icon">
                        <img src="{{asset('/user/img/icon/icon2.svg')}}" alt="">
                    </div>
                    <div class="features-caption">
                        <h3>エキスパートユーザー</h3>
                        <p>世界中で漫画が好きな人を含みます。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-services mb-30">
                    <div class="features-icon">
                        <img src="{{asset('/user/img/icon/icon3.svg')}}" alt="">
                    </div>
                    <div class="features-caption">
                        <h3>30分以上の読書</h3>
                        <p>読めば読むほど勉強になります。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses area start -->
<div class="courses-area section-padding40 fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-tittle text-center mb-55">
                    <h2>最新の投稿</h2>
                </div>
            </div>
        </div>
        <div class="courses-actives">
            @foreach($posts as $post)
            <div class="properties pb-20">
                <div class="properties__card">
                    <div class="properties__img overlay1">
                        @if($post->post_url == null)
                            <img src="{{asset('/user/img/default_post.jpg')}}" alt="" style="height: 200px;">
                        @else
                            <img src="{{asset('/storage/post_url/'.$post->post_url)}}" alt=""  style="height: 200px;">
                        @endif
                    </div>
                    <div class="properties__caption">
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->description}}</p>
                        <p style="font-style: italic">投稿日: {{$post->date_create}} ** {{$post->user->user_name}}</p>
                        <a href="{{URL::to('/posts/'.$post->post_id)}}" class="border-btn border-btn2">続きを読む</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Courses area End -->
@endsection
