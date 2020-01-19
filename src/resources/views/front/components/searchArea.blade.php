<div class="searchArea">
    <form action="{{ $formActionUrl }}" method="get">
        <div class="category">
            <label for="category">カテゴリ</label>
            <select name="category">
                <option value="">すべて</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}"@if($category->id == $inputData['category']) selected @endif>{{ $category->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="type">
            <label for="type">形式</label>
            <select name="type">
                <option value="">すべての形式</option>
            @foreach(config('const.TYPES_OF_MEMO') as $key=>$type)
                <option value="{{ $key }}"@if($key == $inputData['type']) selected @endif>{{ $type['name'] }}</option>
            @endforeach
            </select>
        </div>
        <div class="keyword">
            <label for="keyword">キーワード</label>
            <input type="text" name="keyword" placeholder="キーワードを入力" value="@if(isset($inputData['keyword'])){{ $inputData['keyword'] }}@endif">
        </div>
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>
