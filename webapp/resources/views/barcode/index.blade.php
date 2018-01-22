@extends('layouts.log')

@section('content')
    {!! Form::open(['url' => 'add-barcode/add', 'method' => 'postt']) !!}
        <div class="grid">
            <div class="topbar">
                <a href="/home">
                    <div class="registrerenKnop">
                        {{trans('barcode.back')}}
                    </div>
                </a>
            </div>

            <div class="loginWrapper">
                {!! Form::label('barcode', trans('barcode.voegtoe'), ['class' => 'loginLabel']) !!}
                @if ($errors->has('barcode'))
                    <span class="help-block">
                        <strong>{{ $errors->first('barcode') }}</strong>
                </span>
                @endif
                {!! Form::text('barcode',null,['class'=>'textInput']) !!}
                {!! Form::label('description', trans('barcode.beschrijf'), ['class' => 'loginLabel']) !!}
                @if ($errors->has('description'))
                    <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
                @endif
                {!! Form::text('description',null,['class'=>'textInput']) !!}

            </div>
            {!! Form::submit(trans('barcode.verzend'),['class'=>'loginButtonWrapper']) !!}

        </div>
    {!! Form::close() !!}

@endsection
