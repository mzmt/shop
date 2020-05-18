@extends('layouts.app')

@section('content')
    @if (count($items) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                たぬき商店
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>商品一覧</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <!-- タスク名 -->
                                <td class="table-text">
                                    <div>
                                        <a href="{{ action('Admin\ItemsController@show', $item->id) }}">
                                    {{ $item->description }}
                                        </a>
                                    </div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $item->description }}</div>
                                </td>
                                <td class="table-text">
                                    <div>¥{{ $item->price }}</div>
                                </td>
                                <td>
                                    <!-- TODO: 削除ボタン -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
         <a href="{{ action('Admin\ItemsController@create') }}">新規登録</a>
        </div>
    @endif
@endsection
