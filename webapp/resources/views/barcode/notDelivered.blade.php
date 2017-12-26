@extends('home')

@section('content2')
    <hr>
    <h1>Geleverde pakjes</h1>
    <table class="table">
        <thead>
        <th class="col">barcode</th>
        <th class="col">toegevoegd op</th>
        </thead>
        <tbody>
        @foreach($notDeliveredPackages as  $ndp)
            <tr>
                <td>{{$ndp->barcode}}</td>
                <td>{{$ndp->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection