@extends('layouts.default')
@section('content')
  <head>
    <div style="background-image : url(./img/diary_background.png)">
    <p class="font-italic" style="font-size:30px;"><i class="fas fa-bars"></i>&nbsp;My diary page&nbsp;<i class="fas fa-bars"></i></p>
      <?php //echo url('/img/diary_background.png'); ?>
    <br>


    <button type="button" class="btn btn-dark" onclick="location.href='/mindiary/new'">Create</button><br>
    <br>
  </div>
  </head>
    <div class="body_flex" style="background-color : #FEBEBE">
      <div class="body_left">
      @foreach($diary->reverse() as $temp)
        <div class="bg-primary"><i class="fas fa-book"></i>&nbsp;No. {{ $temp->id }}&nbsp;<i class="fas fa-book"></i></div>
      <div class = "diary_body">
        <div class="card">
          <div class="card-header diary_header"><span class="badge badge-primary" style="font-size:15px"> Title </span> {{ $temp->title }} </div>
          <div class="card-body"><span class="badge badge-primary" style="font-size:15px"> Content </span> <br><br> <pre style="font-size : 15px">{{ $temp->content }} </span></pre></div>
          <div class="card-footer"><span class="badge badge-primary" style="font-size:15px"> Data </span> {{$temp->updated_at}} </div>
        </div>
          <button type="button" class="btn btn-secondary" onclick="location.href='/mindiary/edit/{{$temp->id}}'">Edit</button>
          <button type="button" class="btn btn-secondary" onclick="location.href='/mindiary/{{$temp->id}}'">Delete</button>
        </div>
        <br>
        @endforeach
      </div>
      <div class="side_menu">
        <div class="side_right_title">List</div>
          <div class="side_menu_link">
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/paint" target="_blank">Canvas</a></li>
              <li><a href="https://github.com/laravel/laravel" target="_blank">Github</a></li>
            </ul>
          </div>
      </div>
    </div>
    <div>
      <button type="button" class="btn btn-dark" onclick="location.href='/mindiary/new'">Create</button>
    </div>
    <style>
      .bg-primary {
        width : 10%;
        font-size : 20px;
        border : double black;
      }
      .diary_body {
        width : 100%;
        background-color : #AFFFEE;
        border : 1px solid skyblue;
        border-radius : 4px;
        padding : 15px;
      }
      .card{
        border-color : black;
      }
      .body_flex {
        display:flex;
      }
      .body_left {
        //border : 1px solid black;
        padding : 2%;
        width : 80%;
      }
      .side_menu {
         width:15%;
         border : double black;
         margin-left : 3%;
         margin-top : 3%;
      }
      .side_right_title {
        font-size:20px;
        font-weight:bold;
        background-color:#C4F0EF;
        color:#666666;
        text-align:center;

      }
      .side_menu_link {
        margin-top : 5%;
      }
    </style>
@endsection
