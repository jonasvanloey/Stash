@extends('home')

@section('content2')
<hr>
    <h1>Barcode toevoegen</h1>
<form action="{{url('/add-barcode/add')}}" method="post">
    <div class="form-group">
        <label for="barcode">voeg jouw barcode in</label>
        <input type="text" id="barcode" name="barcode" class="form-control" required>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Voeg Barcode toe
            </button>
    </div>

</form>
@endsection
