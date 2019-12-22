@extends('front.layouts.default')

@section('content')
    <h1>ID：{{ $id }} の {{ $title }} ページです</h1>
    <ul>
        <li><a href="/">めも一覧</a></li>
        <li><a href="/detail/1">めも詳細</a></li>
        <li><a href="/categories">カテゴリ一覧</a></li>
        <li><a href="/categories/1">めも一覧（カテゴリ）</a></li>
        <li><a href="/add">めも追加</a></li>
    </ul>
@endsection
