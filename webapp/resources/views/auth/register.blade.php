@extends('layouts.reg')

@section('content')
    <form  method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
    <div class="grid">
        <div class="topbar">
            <a href="login">
                <div class="loginKnop">
                    {{trans('register.al')}}
                </div>
            </a>
        </div>
        <div class="registreerWrapper">
            <div class="registreerItem">
            <label for="name" class="registreerLabel">{{trans('register.name')}}</label>
            <input id="name" type="text" class="textInput" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
            <div class="registreerItem">
              <label for="email" class="registreerLabel">{{trans('register.email')}}</label>
               <input id="email" type="email" class="textInput" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                  <span class="help-block">
                   <strong>{{ $errors->first('email') }}</strong>
                   </span>
                 @endif
            </div>
            <div class="registreerItem">
                    <label for="password" class="registreerLabel">{{trans('register.pasw')}}</label>
                    <input id="password" type="password" class="textInput" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong class="errorMessage">{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="registreerItem">
                <label for="password-confirm" class="registreerLabel">{{trans('register.cpasw')}}</label>

                    <input id="password-confirm" type="password" class="textInput" name="password_confirmation" required>

            </div>
            <div class="registreerItem">
                <label for="serialNr" class="registreerLabel">{{trans('register.snr')}}</label>
                    <input id="serialNr" class="textInput" name="serialNr" value="{{ old('serialNr') }}"required>
                    @if ($errors->has('serialNr'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('serialNr') }}</strong>
                                    </span>
                    @endif
            </div>
            <div class="registreerItem">
                <label for="street" class="registreerLabel">{{trans('register.strt')}}</label>
                    <input id="street" class="textInput" name="street" value="{{ old('street') }}" required>
                    @if ($errors->has('street'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                    @endif
            </div>
            <div class="registreerItem">
                <label for="nr" class="registreerLabel">{{trans('register.hnr')}}</label>
                    <input id="nr" class="textInput" name="nr" value="{{ old('nr') }}" required>
                    @if ($errors->has('nr'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('nr') }}</strong>
                                    </span>
                    @endif
            </div>
            <div class="registreerItem">
                <label for="city" class="registreerLabel">{{trans('register.cty')}}</label>
                    <input id="city" class="textInput" name="city" value="{{ old('city') }}" required>
                    @if ($errors->has('city'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                    @endif
            </div>
            <div class="registreerItem">
                <label for="postcode" class="registreerLabel">{{trans('register.pco')}}</label>
                    <input id="postcode" class="textInput" name="postcode" value="{{ old('postcode') }}"required>
                    @if ($errors->has('postcode'))
                        <span class="help-block">
                          <strong>{{ $errors->first('postcode') }}</strong>
                           </span>
                    @endif
            </div>
        </div>
        <div class="registreerButtonWrapper">
            <button type="submit" class="registreerButton">
                {{trans('register.btn')}}
            </button>
        </div>
    </div>
        </form>
@endsection
