@extends('layouts.app')

@section('content')
    <div class="grid">
        <div class="topbar">
            <a href="#">
                <div class="registrerenKnop">
                    REGISTREREN
                </div>
            </a>
        </div>
        <form  method="POST" class="loginWrapper" action="{{ route('login') }}">
            {{--<div class="loginWrapper">--}}
                {{ csrf_field() }}
                    <label for="email" class="loginLabel">{{trans('login.email')}}</label>
                    <div>
                        <input id="email" type="email" class="textInput" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="loginLabel">{{trans('login.pasw')}}</label>
                    <div>
                        <input id="password" type="password" name="password" class="textInput" required>

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
            {{--</div>--}}
            <button type="submit" class="loginButtonWrapper">{{trans('login.btn')}}</button>
        </form>
    </div>

@endsection
