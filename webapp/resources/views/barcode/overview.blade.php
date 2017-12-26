@extends('home')

@section('content2')
    <hr>
    <h1>overview</h1>
    <table class="table">
        <thead>
        <th class="col">barcode</th>
        <th class="col">geleverd</th>
        <th class="col">geleverd op</th>
        </thead>
        <tbody>
        @foreach($barcodes as  $barcode)
            <tr>
                <td>{{$barcode->barcode}}</td>
                <td>{{$barcode->is_delivered}}</td>
                <td>{{$barcode->delivered_on}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection