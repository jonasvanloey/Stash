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
                    @if ($errors->has('email'))
                    <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
             @endif
                    <input id="email" type="email" class="textInput" name="email" value="{{ old('email') }}" required autofocus>


                    <label for="password" class="loginLabel">{{trans('login.pasw')}}</label>
                    @if ($errors->has('password'))
                    <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                @endif
                    <input id="password" type="password" name="password" class="textInput" required>

            </div>
            <div class="loginButtonWrapper">
            <button type="submit" class="loginButton">
                {{trans('login.btn')}}
            </button>
        </div>

    </div>
    </form>
@endsection
