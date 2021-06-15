@extends('user.register')

@section('content')
<!-- Login Admin -->
<form method="POST" action="{{ URL::to('/register') }}">
    @csrf
    <div class="login-form">
        <!-- logo-login -->
        <div class="logo-login">
            <a href="/"><img src="{{ asset('/user/img/logo/loder.png') }}" alt=""></a>
        </div>
        <h2>ここで登録してください。</h2>
        <div class="form-input">
            <label for="name" class="col-form-label text-md-right">ユーザー名</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-input">
            <label for="email" class="col-form-label text-md-right">メールアドレス</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-input">
            <label for="password" class="col-form-label text-md-right">パスワード</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-input">
            <label for="password-confirm" class="col-form-label text-md-right">パスワードを認証してください。</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
        </div>

        <div class="form-input pt-30">
            <input type="submit" name="submit" value="登録します">
        </div>
        <!-- Forget Password -->
        <a href="{{ URL::to('/login') }}" class="registration">ログイン</a>
    </div>
</form>
<!-- /end login form -->
@endsection
