@extends('layouts.default')
@section('content')
    <h2>My diary page</h2>
    <br>
    <button type="button" onclick="location.href='/mindiary/new'">Create</button><br>
    <br>
    @foreach($diary->reverse() as $temp)
    <h4>No. {{ $temp->id }}</h4>
    <div class = "diary_body">
      <div class="card">
        <div class="card-header diary_header">Title : {{ $temp->title }} </div>
        <div class="card-body" style="height : 200px" >Content : <br><br> <pre style="font-size : 15px">{{ $temp->content }} </pre></div>
        <div class="card-footer">Data : {{ $temp->updated_at }} </div>
      </div>
        <button type="button" onclick="location.href='/mindiary/edit/{{$temp->id}}'">Edit</button>
        <button type="button" onclick="location.href='/mindiary/{{$temp->id}}'">Delete</button>
    </div>
    <br>
    @endforeach
    </br>
    <div>
      <button type="button" onclick="location.href='/mindiary/new'">Create</button>
    </div>

    <style>
      .diary_body {
        width : 80%;
        border : 1px solid skyblue;
        border-radius : 4px;
        padding : 15px;
      }
    </style>
@endsection
