@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">{{$category->category_name}}</h5>
                    <p class="card-text"> Description : {{$category->category_description}}</p>
                    <a href="{{route('category.edit', ['id'=> $category->id])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('category.delete', ['id'=> $category->id])}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    List Item
                </div>
                <ul class="list-group list-group-flush">
                    @forelse ($category->items as $i)
                    <li class="list-group-item"><a href="{{route('showitemdetail', ['id' => $i->id])}}">{{$i->item_name}}</a></li>
                    @empty
                    <p class="text-center font-italic text-secondary">No Item</p>
                    @endforelse
                </ul>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-3 mt-3 pl-0">
                <a href="{{route('showcategory')}}" class="btn btn-primary stretched-link">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection