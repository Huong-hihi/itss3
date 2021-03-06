<div class="row justify-content-center">
    @foreach($posts as $post)
        <div class="col-lg-4">
            <div class="properties properties2 mb-30">
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
                        <p style="font-style: italic">投稿日 {{$post->date_create}} ** {{$post->user->user_name}}</p>
                        <a href="{{URL::to('/posts/'.$post->post_id)}}" class="border-btn border-btn2">続きを読む</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

{!! $posts->links() !!}
