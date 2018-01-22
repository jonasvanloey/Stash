@extends('layouts.app')

@section('content')
    <div class="grid">
        <div class="topbar">
            <a href="/add-barcode">
                <div class="toevoegenKnop">
                    {{trans('home.barcode')}}
                </div>
            </a>
        </div>
        <div class="verwacht">
            <div class="collapseHeader"><h1>{{trans('home.verwacht')}}</h1></div>
            <div class="scrollWrapper">
                @foreach($notDeliveredPackages as $nd)
                <div class="tabelItem">
                    <div class="itemBeschrijving">
                        <p class="itemTitel">{{trans('home.beschrijving')}}</p>
                        <p>{{$nd->description}}</p>
                    </div>
                    <div class="itemDatum">
                        <p class="itemTitel">{{trans('home.toegevoeg')}}</p>
                        <p>{{$nd->created_at}}</p>
                    </div>
                    <div class="delete"><a href="/barcode/{{$nd->id}}/delete">x</a></div>
                    <div class="itemBarcode">
                        <p class="itemTitel">{{trans('home.b')}}</p>
                        <p>{{$nd->barcode}}</p>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
        <div class="geleverd">
            <div class="collapseHeader"><h1>{{trans('home.geleverd')}}</h1></div>

            <div class="scrollWrapper">
                @foreach($deliveredPackages as $dp)
                <div class="tabelItem">
                    <div class="itemBeschrijving">
                        <p class="itemTitel">{{trans('home.beschrijving')}}</p>
                        <p>{{$dp->description}}</p>
                    </div>
                    <div class="itemDatum">
                        <p class="itemTitel">{{trans('home.toegevoeg')}}</p>
                        <p>{{$dp->created_at}}</p>
                    </div>
                    <div class="leverDatum">
                        <p class="itemTitel">{{trans('home.geleverdd')}}</p>
                        <p>{{$dp->updated_at}}</p>
                    </div>
                    <div class="delete"><a href="/barcode/{{$dp->id}}/delete">x</a></div>
                    <div class="itemBarcode">
                        <p class="itemTitel">{{trans('home.b')}}</p>
                        <p>{{$dp->barcode}}</p>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection