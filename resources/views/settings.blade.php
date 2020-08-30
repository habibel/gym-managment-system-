@extends('master')
@section('content')

@extends('navbar')
@section('nav') 

<script>
  function display_c() {
      var refresh = 1000; // Refresh rate in milli seconds
      mytime = setTimeout('display_ct()', refresh)
    }

    function display_ct() {
      var timex = new Date();
      var time = timex.getHours() + ":" + timex.getMinutes() + ":" + timex.getSeconds();
      document.getElementById('ct').innerHTML = time;
      display_c();
    }


    var today = new Date();
    var month = new Array();
    month[0] = "January"; month[1] = "February"; month[2] = "March"; month[3] = "April"; month[4] = "May"; month[5] = "June";
    month[6] = "July"; month[7] = "August"; month[8] = "September"; month[9] = "October"; month[10] = "November"; month[11] = "December";
    var date = today.getDate() + ' ' + (month[today.getMonth()]) + ' , ' + today.getFullYear();
    jQuery(document).ready(function () { display_ct(); jQuery(".date-text").text(date); });
</script>

<div class="row m-4" style="height: 50px">
    <div class="col px-md-0 shadow pt-3 font-italic font-weight-bold rounded-pill" style="height: 50px;text-align:center;">@if(session()->has('count')){{session()->get("count").' members'}} @endif</div>
    <div class="col px-md-0 shadow pt-3 font-italic font-weight-bold rounded-pill" style="height: 50px;text-align:center;"> <span class="date-text"></span> | <span class="badge badge-warning p-2" id="ct"></span></div>
  </div>@if(session()->has('mssg'))
      <div class="alert alert-info"  aria-hidden="true" role="alert">
        {{session()->get("mssg")}}</div>
        @endif
  <style>
    .dot {
      height: 150px;
      width:150px;
      margin: 150px;
      margin-left: 100px;
      background-color: rgb(214, 98, 44);
      border-radius: 50%;
      display: inline-block;  color: rgb(58, 26, 7);
      font-size: 23px;
      font-family: sans-serif;
      font-weight: Bold;
      padding-top:50px; 
    }
   
    </style>
    </head>
    <body>
    
    <div style="text-align:center">
      
    <a href="{{url('changepass')}}"><span class="dot">password</span></a>
     <a href="{{url('changeamount')}}"> <span class="dot">amount</span></a>
     
    </div>

@endsection

@endsection