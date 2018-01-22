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
                {!! Form::text('barcode',null,['class'=>'textInput']) !!}
                @if ($errors->has('barcode'))
                    <span class="help-block">
                        <strong>{{ $errors->first('barcode') }}</strong>
                </span>
                @endif
                {!! Form::label('description', trans('barcode.beschrijf'), ['class' => 'loginLabel']) !!}
                {!! Form::text('description',null,['class'=>'textInput']) !!}
                @if ($errors->has('description'))
                    <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
                @endif
            </div>
            {!! Form::submit(trans('barcode.verzend'),['class'=>'loginButtonWrapper']) !!}

        </div>
    {!! Form::close() !!}

@endsection
