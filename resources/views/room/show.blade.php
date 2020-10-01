@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$room->title}}</div>

                <div class="card-body">
                    <div><img src="../{{$room->image}}" alt=""></div>
                    <div>description:{{$room->description}}</div>
                    <div>price{{$room->price}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
