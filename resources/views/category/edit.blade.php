@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('category.editput', ['id' => $category->id])}}" method="post">
        @method('PUT')
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <div class="form-group">
            <label for="category_name">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $category->category_name }}">
        </div>
        <div class="form-group">
            <label for="category_description">Category Description</label>
            <input type="text" class="form-control" id="category_description" name="category_description" value="{{ $category->category_description }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection