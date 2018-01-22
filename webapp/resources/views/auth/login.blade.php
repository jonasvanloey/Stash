@extends('layouts.log')

@section('content')
    <form  method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
    <div class="grid">
        <div class="topbar">
            <a href="register">
                <div class="registrerenKnop">
                    {{trans('login.reg')}}
                </div>
            </a>
        </div>

            <div class="loginWrapper">
                    <label for="email" class="loginLabel">{{trans('login.email')}}</label>
                    <input id="email" type="email" class="textInput" name="email" value="{{ old('email') }}" required autofocus>
                     @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                     @endif

                    <label for="password" class="loginLabel">{{trans('login.pasw')}}</label>
                    <input id="password" type="password" name="password" class="textInput" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif


                {{--<div class="form-group">--}}
                    {{--<div>--}}
                        {{--<div class="checkbox">--}}
                            {{--<label>--}}
                            {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{trans('login.rem')}}--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <button type="submit" class="loginButtonWrapper">
                {{trans('login.btn')}}
            </button>

    </div>
    </form>
@endsection
