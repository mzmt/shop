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
        <div>id: {{ $item->id }}</div>
        <div>name: {{ $item->name }}</div>
        <div>price: {{ $item->price }}</div>
        <div>description: {{ $item->description }}</div>
        <div>登録日: {{ $item->created_at }}</div>
        <a href="{{ action('Admin\ItemsController@index')}}">商品一覧</a>
        <a href="{{ action('Admin\ItemsController@edit', $item->id) }}">編集</a>
        <form action="{{ action('Admin\ItemsController@destroy', $item->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align">削除</button>
        </form>
    </div>
</div>
@endsection
