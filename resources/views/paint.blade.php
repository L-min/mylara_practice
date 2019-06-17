@extends('layouts.canvas')
@section('content')
  <canvas id='canvas' width="500" height="500">

  </canvas>
  <input type="button" value="refresh" onclick="refresh()"></input>
  <!--source: https://ppako.tistory.com/4 [어라?]-->
  <script>

 var canvas;
 var ctx;
 var gogo = false;
 window.onload = doInit;

 function doInit() {
  canvas = document.getElementById("canvas");
  ctx = canvas.getContext("2d");
  canvas.onmousedown = start;
  canvas.onmousemove = draw;
  window.onmouseup = end;
 }

 function start(e) {
  ctx.beginPath();
  var xx = e.target.offsetLeft;
  var yy = e.target.offsetTop;
  ctx.moveTo(e.clientX - xx, e.clientY - yy);
  gogo = true;
 }

 function draw(e) {
  if(gogo) {
   var xx = e.target.offsetLeft;
   var yy = e.target.offsetTop;
   ctx.lineTo(e.clientX - xx, e.clientY - yy);
   ctx.stroke();
  }
 }

 function end(e) {
  gogo = false;
 }

 function save() {
  var imgStr = canvas.toDataURL();
  document.getElementById("targetImg").src = imgStr;
 }

 function refresh() {
  ctx.clearRect(0,0,canvas.width,canvas.height);
  document.getElementById("targetImg").src = null;
 }

</script>


  <!--
  <h2>Free board for us</h2>
  <div class="board_container card bg-light text-dark">
    <div class="card bg-dark text-white" style="width:5%">
      Name
    </div>
    <div>
      ????
    </div>
    <div class="card bg-dark text-white" style="width:7%">
      Content
    </div>
    <div class="card bg-light text-dark" style="width:90%">
      falsjf;lakhtre;jfalkdc
    </div>
  </div>
  <style>
    .board_container {
      border:1px solid;
      width : 60%;
      margin-top:20px;
    }
  </style>
  -->
@endsection
