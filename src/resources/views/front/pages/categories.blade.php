@extends('front.layouts.default')

@section('content')
    <h1 class="pageTitle">{{ $title }}</h1>
@foreach(config('const.TYPES_OF_MEMO') as $key => $type)
    <dl class="categoryList">
        <dt><i class="{{ $type['icon_class'] }}"></i>{{ $type['name'] }}</dt>
    @foreach($categories[$key] as $category)
        <dd draggable="true">
            <a class="category" href="">{{ $category->name }}(4)</a>
            <a class="sort" href=""><i class="fas fa-align-justify"></i></a>
            <a class="trash" href=""><i class="far fa-trash-alt"></i></a>
        </dd>
    @endforeach
    </dl>
@endforeach
@endsection
