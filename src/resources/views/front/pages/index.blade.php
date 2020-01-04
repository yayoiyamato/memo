@extends('front.layouts.default')

@section('content')
    <h1 class="pageTitle">{{ $title }}</h1>
    @include('front.components.searchArea')
    @include('front.components.searchMemoResults')
@endsection
