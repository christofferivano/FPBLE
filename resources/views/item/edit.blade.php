@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Item') }}</div>
                    <div class="card-body">
                        <form action="{{ route('item.editput', ['id' => $item->id])}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Item Name') }}</label>
                                <div class="col-md-6">
                                    <input id="item_name" type="text" class="form-control" name="item_name" value="{{ $item->item_name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Item Description') }}</label>

                                <div class="col-md-6">
                                    <input id="item_description" type="text" class="form-control" name="item_description" value="{{ $item->item_description }}" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Item Quantity') }}</label>

                                <div class="col-md-6">
                                    <input id="item_quantity" type="text" class="form-control" name="item_quantity" value="{{ $item->item_quantity }}" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection