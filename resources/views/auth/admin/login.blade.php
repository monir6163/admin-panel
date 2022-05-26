@extends('layouts.admin')

@section('admin_content')
<div class="hold-transition login-page">
    <div class="login-box">
        {{-- <div class="login-logo">
          <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div> --}}
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body" style="border-radius: 5px">
            <p class="login-box-msg">Login Admin Panel</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
              <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>

              </div>

            @if (session('erorr'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ session('erorr') }}</strong>
              </div>
              @endif
              <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Log In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <p class="mb-1">
                {{-- @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif --}}
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
</div>

@endsection
