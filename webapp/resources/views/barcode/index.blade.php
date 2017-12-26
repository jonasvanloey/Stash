@extends('home')

@section('content2')
<hr>
    <h1>Barcode toevoegen</h1>
<form action="{{url('/add-barcode/add')}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group {{ $errors->has('barcode') ? ' has-error' : '' }}">
        <label for="barcode">voeg jouw barcode in</label>
        <input type="text" id="barcode" name="barcode" class="form-control" required autofocus>
        @if ($errors->has('barcode'))
            <span class="help-block">
                <strong>{{ $errors->first('barcode') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description">Beschrijf je bestelling in een aantal woorden</label>
        <input type="text" id="description" name="description" class="form-control" required autofocus>
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Voeg Barcode toe
            </button>
    </div>

</form>
@endsection
