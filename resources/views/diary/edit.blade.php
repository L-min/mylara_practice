@extends('layouts.default')
@section('content')
<form method="get" action="/mindiary/edit">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value = "{{ $diary->id}}">
<h2>Title</h2>
<input type="text" name="title" value="{{ $diary->title }}">
<h2>Content</h2>
<textarea name="content">{{ $diary->content }}</textarea><br>
<input type="submit" value="保存">
@endsection
