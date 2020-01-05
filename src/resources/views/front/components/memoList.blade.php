<table class="memoList">
    <thead>
        <tr>
            <th><a href="">カテゴリ</a></th>
            <th class="title"><a href="">タイトル</a></th>
            <th><a href="">形式</a></th>
            <th><a href="">登録日</a></th>
        </tr>
    </thead>
    <tbody>
    @foreach($memos as $memo) 
        <tr data-href="">
            <td>めもカテゴリ</td>
            <td>{{ $memo->title }}</td>
            <td>{{ config('const.TYPES_OF_MEMO')[$memo->type] }}</td>
            <td>{{ $memo->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

