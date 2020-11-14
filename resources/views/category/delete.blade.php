@extends('layouts.app')

@section('content')
    <form action="{{ route('category.delete', ['id' => $category->id])}}" method="post">
        @csrf
        @method('DELETE')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card text-center">
                        <div class="card-body">
                            <p>Are You Sure Wanna Delete This Category? {{ $category->name }}</p>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection