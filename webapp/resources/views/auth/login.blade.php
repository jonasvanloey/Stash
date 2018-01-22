@extends('layouts.app')

@section('content')
<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('login.login')}}</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{trans('login.email')}}</label>

                            <div>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">{{trans('login.pasw')}}</label>


                            <div>
                                <input id="password" type="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{trans('login.rem')}}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
<<<<<<< HEAD
                            <div>
                                <button type="submit">
                                    Login
                                </button>

                                <a href="{{ route('password.request') }}">
                                    Forgot Your Password?
=======
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{trans('login.btn')}}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{trans('login.for')}}
>>>>>>> 13f34473b90fe9c0ca74b4ea69b09058667b7aa2
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
@endsection
