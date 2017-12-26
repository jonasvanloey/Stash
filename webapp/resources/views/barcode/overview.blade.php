@extends('home')

@section('content2')
    <hr>
    <h1>overview</h1>
    <table class="table">
        <thead>
        <th class="col">delete</th>
        <th class="col">barcode</th>
        <th class="col">bechrijving</th>
        <th class="col">toegevoegd op</th>
        <th class="col">geleverd</th>
        <th class="col">geleverd op</th>
        </thead>
        <tbody>
        @foreach($barcodes as  $barcode)
            <tr>
                <td><div id="{{$barcode->id}}" class="del btn btn-danger"><span class="glyphicon glyphicon-remove"></span></div></td>
                <td>{{$barcode->barcode}}</td>
                <td>{{$barcode->description}}</td>
                <td>{{$barcode->created_at}}</td>
                @if($barcode->is_delivered===0)
                    <td><span class="glyphicon glyphicon-remove"></span></td>
                @else
                    <td><span class="glyphicon glyphicon-ok"></span></td>
                @endif
                <td>{{$barcode->delivered_on}}</td>
            </tr>
            <tr class="confirm {{$barcode->id}}">
                <td>
                    <p>Bent u zeker dat u dit artikel wil verwijderen?
                        <a href="/barcode/{{$barcode->id}}/delete" class="btn btn-danger">ja</a>
                        <span id="{{$barcode->id}}" class="btn btn-warning nee">nee</span></p>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection