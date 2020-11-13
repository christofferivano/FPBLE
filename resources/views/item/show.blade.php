@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">{{$item->item_name}}</h5>
                    <p class="card-text"> Description : {{$item->item_description}}</p>
                    <p class="card-text"> Quantity : {{$item->item_quantity}}</p>
                    <p class="card-text"> Category : {{$item->category->category_name}}</p>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-3 pl-0">
                <a href="{{route('showitem')}}" class="btn btn-primary stretched-link">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection