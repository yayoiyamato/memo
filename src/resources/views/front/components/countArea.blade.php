<div class="countArea">
    <div class="count">全 {{ $memos->total() }} 件中 {{ $memos->firstItem() }} ～ {{ $memos->lastItem() }} 件を表示</div>
    {{-- /* TODO 2ページ目以降表示されないのを修正する */ --}}
    {{ $memos->links('pagination::default') }}
</div>
