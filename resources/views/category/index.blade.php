@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('newcategory')}}" class="badge badge-primary">+new Category</a>
            @if (session('create_success'))
            <div class="alert alert-success" role="alert">
                {{ session('create_success') }}
            </div>
            @endif
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">
                    List Category
                </div>
                <ul class="list-group list-group-flush">
                    @forelse ($category as $i)
                    <li class="list-group-item"><a href="{{route('showcategorydetail', ['id' => $i->id])}}">{{$i->category_name}}</a></li>
                    @empty
                    <p class="text-center font-italic text-secondary">No Category</p>
                    @endforelse
                </ul>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-3 mt-3 pl-0">
                <a href="{{route('home')}}" class="btn btn-primary stretched-link">Back</a>
            </div>
        </div>
    </div>

</div>
@endsection