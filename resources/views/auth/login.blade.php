@extends('layouts.app')

@section('content')
<div class="container login">
    <div class="row">
        <div class="col m8 offset-m2">
                <h4 class="center">Login</h4>
                    <div class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col m4 control-label">E-Mail Address</label>

                            <div class="col m10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col m4 control-label">Password</label>

                            <div class="col m10">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <form action="#">
                            <p>
                            <div class="col m10 ">
                                <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <label for="remember">Remember Me</label>
                            </p>
                            </div>
                        </form>

                        <div class="form-group">
                            <div class="col m10">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection
