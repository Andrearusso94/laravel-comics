@extends('layouts.app')

@section('content')
<h1>Shop</h1>
<div class="conatiner">
    <div class="row">
        @foreach($shop as $fumetto)
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{$fumetto['thumb']}}" alt="">
                <div class="card-body">
                    <h5>{{$fumetto['series']}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection