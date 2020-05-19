@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        たぬき商店
    </div>
    <div class="panel-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ action('Admin\ItemsController@update', $item->id) }}" method="POST" class="form-horizontal">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="item" class="col-sm-3 control-label">タスク</label>
                <div class="col-sm-6">
                    <p>name</p>
                    <input type="text" name="name" id="item-name" class="form-control" value="{{ old('name') ?? $item->name }}">
                </div>
                <div class="col-sm-6">
                    <p>price</p>
                    <input type="text" name="price" id="item-price" class="form-control" value="{{ old('price') ?? $item->price }}">
                </div>
                <div class="col-sm-6">
                    <p>description</p>
                    <input type="text" name="description" id="item-description" class="form-control" value="{{ old('description') ?? $item->description }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 更新
                    </button>
                </div>
            </div>
        </form>
        <a href="{{ action('Admin\ItemsController@index')}}">商品一覧</a>
    </div>
</div>

@endsection
