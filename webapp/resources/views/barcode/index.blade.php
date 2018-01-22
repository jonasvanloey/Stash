@extends('layouts.app')

@section('content')
    <h1>{{trans('barcode.titel')}}</h1>
    {!! Form::open(['url' => 'add-barcode/add', 'method' => 'postt']) !!}
    <div class="form-group {{ $errors->has('barcode') ? ' has-error' : '' }}">
        {!! Form::label('barcode', trans('barcode.voegtoe'), ['class' => '']) !!}
        {!! Form::text('barcode',null,['class'=>'form-control']) !!}
        @if ($errors->has('barcode'))
            <span class="help-block">
                <strong>{{ $errors->first('barcode') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
        {!! Form::label('description', trans('barcode.beschrijf'), ['class' => '']) !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::submit(trans('barcode.verzend')) !!}
    {!! Form::close() !!}

@endsection
