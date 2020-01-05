<div class="searchArea">
    <div class="category">
        <form action="">
            <label for="category">カテゴリ</label>
            <select name="category">
                <option value="">すべて</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>
        </form>
    </div>
    <div class="type">
        <form action="">
            <label for="type">形式</label>
            <select name="type">
                <option value="">すべての形式</option>
            @foreach(config('const.TYPES_OF_MEMO') as $key=>$type)
                <option value="{{ $key }}">{{ $type['name'] }}</option>
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
