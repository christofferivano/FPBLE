@extends('layouts.app')

@section('content')
    <form action="{{ route('category.delete', ['id' => $category->id])}}" method="post">
        @csrf
        @method('DELETE')
        <p>Are You Sure Wanna Delete This Category? {{ $category->name }}</p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection