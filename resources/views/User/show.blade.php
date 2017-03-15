<html>
    <body>
        <h1>登録しているユーザの表示</h1>
        <ul>
            @foreach($data as $name)
            <li>登録番号：{{$name->id}}/登録名：{{$name->name}}</li>
            @endforeach
        </ul>
    </body>
</html>