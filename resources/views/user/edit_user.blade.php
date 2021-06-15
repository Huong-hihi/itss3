@extends('layout_user')
@section('content')
    <section class="no-skin">
        <main>
            <section class="slider-area slider-area2">
                <div class="slider-active">
                    <!-- Single Slider -->
                    <div class="single-slider slider-height2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-11 col-md-12">
                                    <div class="hero__caption hero__caption2">
                                        <h1 data-animation="bounceIn" data-delay="0.2s">{{$user->user_name}}のプロフィール編集</h1>
                                        <!-- breadcrumb Start-->
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">ホーム</a></li>
                                                <li class="breadcrumb-item"><a
                                                        href="{{ URL::to('users/' . auth()->user()->user_id . '/posts') }}">
                                                        {{$user->user_name}}のレビュー</a></li>
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
            <div class="main-container ace-save-state" id="main-container">
                <div class="main-content">
                    <div class="main-content-inner">
                        <div class="page-content">
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- PAGE CONTENT BEGINS -->
                                    <div class="hr dotted"></div>
                                    <div>
                                        <div id="user-profile-3" class="user-profile row">
                                            <div class="col-sm-offset-1 col-sm-10">
                                                <div class="space"></div>
                                                <form class="form-horizontal" action="update" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="tabbable">
                                                        <div class="tab-content profile-edit-tab-content">
                                                            <div id="edit-basic" class="tab-pane in active">
                                                                <h4 class="header blue bolder smaller">一般情報</h4>

                                                                <div class="row">
                                                                    @if ($user->avatar_url != null)
                                                                    <div class="block-ava">
                                                                        <img src="{{asset('storage/avatar_url/'.$user->avatar_url)}}">
                                                                    </div>

                                                                        {{-- <div
                                                                            class="vspace-12-sm"></div>
                                                                        --}}
                                                                    <div class="avatar_pick">
                                                                        <input type="file" class="file_input" name="avatar_url">
                                                                        <label class="file_input_btn" for="avatar_url">{{ $user->avatar_url }}</label>
                                                                    </div>
                                                                    @else
                                                                    <div class="block-ava">
                                                                        <img src="{{asset('/user/img/default_avt.jpg')}}">
                                                                    </div>
                                                                    <div class="avatar_pick">
                                                                        <input type="file" class="file_input" name="avatar_url">
                                                                        <label class="file_input_btn" for="avatar_url">写真アップロード</label>
                                                                    </div>
                                                                    @endif
                                                                    
                                                                </div>


                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-username">ユーザー名</label>

                                                                    <div class="col-sm-9">
                                                                        <input type="text" id="form-field-username"
                                                                            placeholder="ユーザー名" name="username"
                                                                            value={{ $user->user_name }} disabled></br>
                                                                        <small>
                                                                            <span style="color:red">
                                                                                @error('username')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </small>
                                                                    </div>
                                                                </div>

                                                                <div class="space-4"></div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-first">名前</label>

                                                                    <div class="col-sm-9">
                                                                        <input class="input-small" type="text"
                                                                            id="form-field-first" placeholder="苗字"
                                                                            name="firstname" value={{ $user->first_name }}>
                                                                        <input class="input-small" type="text"
                                                                            id="form-field-last" placeholder="名"
                                                                            name="lastname" value={{ $user->last_name }}>
                                                                    </div>
                                                                    {{-- <div class="col-sm-9">
                                                                    <small>
                                                                        <span>
                                                                            @error('firstname')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </small>
                                                                    <small>
                                                                        <span>
                                                                            @error('lastname')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </small>
                                                                    </div> --}}
                                                                </div>
                                                                <div class="space-4"></div>
                                                                <hr />
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-date">誕生日</label>

                                                                    <div class="col-sm-9">
                                                                        <span>
                                                                            <input class="input-medium date-picker pr-1"
                                                                                id="form-field-date" type="date"
                                                                                data-date-format="dd-mm-yyyy"
                                                                                name="birthday" value={{ $user->birthday }}>
                                                                            <i class="ace-icon fa fa-calendar"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="space-4"></div>

                                                                <div class="form-group">
                                                                    <label
                                                                        class="col-sm-3 control-label no-padding-right">性別</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="radio" name="gender" value="Male"
                                                                            {{ $user->gender == 'Male' ? 'checked' : '' }}>男性
                                                                        <input type="radio" name="gender" value="Female"
                                                                            {{ $user->gender == 'Female' ? 'checked' : '' }}>女性
                                                                    </div>
                                                                </div>

                                                                <div class="space"></div>
                                                                <h4 class="header blue bolder smaller">連絡</h4>
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-email">電子メール</label>

                                                                    <div class="col-sm-9">
                                                                        <span>
                                                                            <input type="email" id="form-field-email"
                                                                                name="email" placeholder="example@gmail.com"
                                                                                value={{ $user->email }} disabled>
                                                                            <i class="ace-icon fa fa-envelope"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="space-4"></div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-website">住所</label>

                                                                    <div class="col-sm-9">
                                                                        <span>
                                                                            <input type="text" id="form-field-website"
                                                                                name="address" placeholder="Address"
                                                                                value={{ $user->address }}>
                                                                            <i class="ace-icon fa fa-globe"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="space-4"></div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-phone">電話番号</label>

                                                                    <div class="col-sm-9">
                                                                        <span>
                                                                            <input class="input-medium input-mask-phone"
                                                                                type="text" id="form-field-phone"
                                                                                name="phone" placeholder="phone"
                                                                                value={{ $user->phone }}>
                                                                            <i
                                                                                class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                                                                        </span></br>
                                                                        <small>
                                                                            <span style="color:red">
                                                                                @error('phone')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </small>
                                                                    </div>
                                                                </div>

                                                                <div class="space"></div>

                                                                <h4 class="header blue bolder smaller">パスワード</h4>
                                                                <div id="edit-password" class="tab-pane">
                                                                    <div class="space-10"></div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-3 control-label no-padding-right"
                                                                            for="form-field-pass0">今のパスワード</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="password" id="form-field-pass0"
                                                                                name="pass0">
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-4"></div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-3 control-label no-padding-right"
                                                                            for="form-field-pass1">新しいのパスワード</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="password" id="form-field-pass1"
                                                                                name="pass1">
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-4"></div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-3 control-label no-padding-right"
                                                                            for="form-field-pass2">パスワード確認</label>

                                                                        <div class="col-sm-9">
                                                                            <input type="password" id="form-field-pass2"
                                                                                name="pass2">
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="clearfix form-actions">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button class="btn btn-info" type="submit">
                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                            保存
                                                                        </button>
                                                                        &nbsp; &nbsp;
                                                                        <button class="btn" type="reset">
                                                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                            キャンセル
                                                                        </button>

                                                                    </div>
                                                                </div>
                                                </form>
                                            </div><!-- /.span -->
                                        </div><!-- /.user-profile -->
                                    </div>

                                    <!-- PAGE CONTENT ENDS -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.page-content -->
                    </div>
                </div><!-- /.main-content -->
            </div><!-- /.main-container -->
        </main>
    </section>
    <style>
        .avatar_pick {
            margin-top: 60px;
            margin-left: 60px;
        }
        .file_input {
            width: 300px;
            height: 30px;
            cursor: pointer;
            filter: alpha(opacity=0);
            opacity: 0;
        }
        .file_input_btn {
            display: block;
            width: fit-content;
            height: 30px;
            margin-top: -30px;
            padding-top: 5px;
            padding-left: 5px;
            padding-right: 5px;
            cursor: pointer;
            background: #c054ff;
            color: #ffffff;
            font-family: "Josefin Sans", sans-serif;
            font-size: 16px;
            text-align: center;
        }
    </style>
    <script>
        $("[type=file]").on("change", function(){
        // Name of file and placeholder
        var file = this.files[0].name;
        var dflt = $(this).attr("placeholder");
        if($(this).val()!=""){
            $(this).next().text(file);
        } else {
            $(this).next().text(dflt);
        }
        });
    </script>
@endsection
