@extends('layouts.base')
@section('title', 'リレーションの基本')
@section('main')
<h3>「{{ $book->title }}」のレビュー</h3>
<ul>
  @foreach ($book->reviews as $rev)
  <li>{{ $rev->body }}</li>
  @endforeach
</ul>
@endsection
