@extends('home')

@section('content2')
    <hr>
    <h1>Geleverde pakjes</h1>
    <table class="table">
        <thead>
        <th class="col">barcode</th>
        <th class="col">geleverd op</th>
        </thead>
        <tbody>
        @foreach($deliveredPackages as  $dp)
            <tr>
                <td>{{$dp->barcode}}</td>
                <td>{{$dp->delivered_on}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection