@extends('layouts.default')
@section('content')
<form method="post" action="/mindiary">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<h2>Title</h2>
<input type="text" name="title">
<h2>Content</h2>
<textarea name="content"></textarea><br>
<input type="submit" value="Create">
@endsection
