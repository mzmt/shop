<html lang="en">
    <head>
        <title>shop</title>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="col-sm-4">
                    <div class="text-center my-4">
                        <h3 class="brown border p-2">ユーザ検索</h3>
                    </div>
                    <div class="col-sm-4">
                        <form class="form-inline" action="{{ action('Admin\ItemsController@index') }}">
                            <div class="form-group">
                                <input type="text" name="q" value="{{ $q ?? '' }}" class="form-control" placeholder="商品名を入力してください">
                            </div>
                            <input type="submit" value="検索" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content')
    </body>
</html>
