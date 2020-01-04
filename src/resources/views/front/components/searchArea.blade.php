<div class="searchArea">
    <div class="category">
        <form action="">
            <label for="category">カテゴリ</label>
            <select name="category">
                <option value="">すべて</option>
                <option value="1">Laravel</option>
                <option value="2">PHP</option>
                <option value="3">共通</option>
                <option value="4">検索フォーム</option>
            </select>
        </form>
    </div>
    <div class="type">
        <form action="">
            <label for="type">形式</label>
            <select name="type">
                <option value="">すべての形式</option>
            @foreach($types as $type)
                <option value="{{ $type['code'] }}">{{ $type['name'] }}</option>
            @endforeach
            </select>
        </form>
    </div>
    <div class="keyword">
        <form action="/">
            <label for="keyword">キーワード</label>
            <input type="text" name="keyword" placeholder="キーワードを入力">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
