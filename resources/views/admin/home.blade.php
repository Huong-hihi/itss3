@extends('layout_admin')
@section('content')
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<div class="container-fluid">
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5">{{$number_of_users}} ユーザー</div>
                </div>
                <a class="card-footer text-white clearfix small z-1 edus-nav-item-1" href="#">
                    <span class="float-left">詳細</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">{{$number_of_posts}} 投稿一覧</div>
                </div>
                <a class="card-footer text-white clearfix small z-1 edus-nav-item-2" href="#">
                    <span class="float-left">詳細</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                    </div>
                    <div class="mr-5">{{$number_of_tags}} タグ</div>
                </div>
                <a class="card-footer text-white clearfix small z-1 edus-nav-item-3" href="#">
                    <span class="float-left">詳細</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        
    </div>
@include('admin.users_show')
@include('admin.posts_show')
@include('admin.tags_show')
</div>
<!-- /.container-fluid -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('/js/tran.js')}}"></script>
@endsection
