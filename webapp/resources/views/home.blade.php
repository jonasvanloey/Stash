@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="/add-barcode" class="btn btn-default">barcode toevoegen</a>
                        <a href="#" class="btn btn-default">geleverde pakketjes</a>
                        <a href="#" class="btn btn-default">nog niet geleverde pakketjes</a>

                        @yield('content2')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
