@extends('layout_user')
@section('content')
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">{{$user->user_name}}のプロフィール</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">ホーム</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses area start -->
    <div class="main-container ace-save-state" id="main-container">
        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-tittle text-center mb-55">
                                <div class="hr dotted"></div>
                                <div>
                                    <div id="user-profile-3" class="user-profile row">
                                        <div class="col-sm-offset-1 col-sm-10">
                                            <div class="space"></div>
                                            <form class="form-horizontal">
                                                <div class="tabbable">
                                                    <div class="tab-content profile-edit-tab-content">
                                                        <div id="edit-basic" class="tab-pane in active">
                                                            <h4 class="header blue bolder smaller">一般情報</h4>
                                                            <div class="row">
                                                                @if ($user->avatar_url != null)
                                                                <div class="block-ava">
                                                                    <img src="{{asset('storage/avatar_url/'.$user->avatar_url)}}">
                                                                </div>
                                                                    {{-- <div class="vspace-12-sm"></div> --}}
                                                                @else
                                                                <div class="block-ava">
                                                                    <img src="{{asset('/user/img/default_avt.jpg')}}">
                                                                </div>
                                                                @endif
                                                                <div class="col-xs-12 col-sm-8">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-4 control-label no-padding-right"
                                                                            for="form-field-username">ユーザー名</label>
                                                                        <div class="col-sm-8">
                                                                            {{ $user->user_name }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-4 control-label no-padding-right"
                                                                            for="form-field-firstname">苗字</label>
                                                                        <div class="col-sm-8">
                                                                            {{ $user->first_name }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-4 control-label no-padding-right"
                                                                            for="form-field-lastname">名</label>

                                                                        <div class="col-sm-8">
                                                                            {{ $user->last_name }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="space-4"></div>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="row">
                                                                <div style="width:100px; height: 10px"></div>
                                                                <div class="col-xs-12 col-sm-8">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-4 control-label no-padding-right"
                                                                            for="form-field-date">誕生日</label>

                                                                        <div class="col-sm-8">
                                                                            <span class="input-icon input-icon-right">
                                                                                {{ $user->birthday }}
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-4"></div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-4 control-label no-padding-right">性別</label>
                                                                        <div class="col-sm-8">
                                                                            <?php
                                                                            if($user->gender == "Male") {
                                                                                echo "男性";
                                                                            }
                                                                            else if($user->gender == "Female") {
                                                                                echo "女性";
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-4"></div>
                                                                </div>
                                                            </div>

                                                            <h4 class="header blue bolder smaller">連絡</h4>
                                                            <div class="row">
                                                                <div style="width:100px; height: 10px"></div>
                                                                <div class="col-xs-12 col-sm-8">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-4 control-label no-padding-right"
                                                                            for="form-field-email">電子メール</label>

                                                                        <div class="col-sm-8">
                                                                            <span class="input-icon input-icon-right">
                                                                                {{ $user->email }}
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-4"></div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-4 control-label no-padding-right"
                                                                            for="form-field-website">住所</label>

                                                                        <div class="col-sm-8">
                                                                            <span class="input-icon input-icon-right">
                                                                                {{ $user->address }}
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-4"></div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-4 control-label no-padding-right"
                                                                            for="form-field-phone">電話番号</label>

                                                                        <div class="col-sm-8">
                                                                            <span class="input-icon input-icon-right">
                                                                                {{ $user->phone }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space"></div>
                                                            @if (Auth::user()->user_id == $user->user_id)
                                                                <div class="clearfix form-actions">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <a class="btn btn-info" type="button"  
                                                                            href="{{ URL::to('users/' . Auth::user()->user_id . '/edit') }}">
                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                            編集
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
