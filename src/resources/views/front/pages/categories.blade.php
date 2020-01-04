@extends('front.layouts.default')

@section('content')
    <h1 class="pageTitle">{{ $title }}</h1>
    <dl class="categoryList">
        <dt class="md">マークダウン</dt>
        <dd draggable="true">
            <a class="category" href="">Laravel(4)</a>
            <a class="sort" href=""><i class="fas fa-align-justify"></i></a>
            <a class="trash" href=""><i class="far fa-trash-alt"></i></a>
        </dd>
        <dd draggable="true">
            <a class="category" href="">PHP(10)</a>
            <a class="sort" href=""><i class="fas fa-align-justify"></i></a>
            <a class="trash" href=""><i class="far fa-trash-alt"></i></a>
        </dd>
        <dd draggable="true">
            <a class="category" href="">HTML(1)</a>
            <a class="sort" href=""><i class="fas fa-align-justify"></i></a>
            <a class="trash" href=""><i class="far fa-trash-alt"></i></a>
        </dd>
        <dd draggable="true">
            <a class="category" href="">CSS(2)</a>
            <a class="sort" href=""><i class="fas fa-align-justify"></i></a>
            <a class="trash" href=""><i class="far fa-trash-alt"></i></a>
        </dd>
    </dl>
    <dl class="categoryList">
        <dt class="sn">スニペット</dt>
        <dd>
            <a class="category" href="">共通(4)</a>
            <a class="sort" href=""><i class="fas fa-align-justify"></i></a>
            <a class="trash" href=""><i class="far fa-trash-alt"></i></a>
        </dd>
        <dd>
            <a class="category" href="">検索フォーム(10)</a>
            <a class="sort" href=""><i class="fas fa-align-justify"></i></a>
            <a class="trash" href=""><i class="far fa-trash-alt"></i></a>
        </dd>
        <dd>
            <a class="category" href="">ナビゲーション(1)</a>
            <a class="sort" href=""><i class="fas fa-align-justify"></i></a>
            <a class="trash" href=""><i class="far fa-trash-alt"></i></a>
        </dd>
    </dl>
@endsection
