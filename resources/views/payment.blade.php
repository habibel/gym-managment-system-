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
<div class="row m-4 " style="height: 50px;text-align:center;">
  <div class="col px-md-0 shadow pt-3 font-weight-bold font-italic rounded-pill"
   style="height: 50px;text-align:center;"> @if(session()->has('count')){{session()->get("count").' members'}} @endif</div>
  <div class="col px-md-0 shadow pt-3 font-italic font-weight-bold rounded-pill " style="height: 50px"> <span class="date-text"></span> | <span class="badge badge-warning p-2" id="ct"></span> </div>
</div>


<div class="row" style="height: 50px">
<div class="col px-md-0" style="height: 50px">
  <form action="{{ url('/searchpayment')}}" method="GET">
  <input type="search"  class="ml-1 rounded-pill form-control "name="search" style="width: 30%"  placeholder="search" />
  </form>
</div>
  </div>
 
@php
    $monthnow= date('m');
    
@endphp
<h2>atletes sutuation in this month </h2>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">statu</th>
        
      </tr>
    </thead>
    <tbody>
     @foreach ($all as $item)
     @if($item->month==$monthnow)
     <tr>
     <td><a  class="text-dark" href="{{url('/month/' .$item->id)}}">
       {{$item->name}}</a>
     </td> 
     <td>
      {{$item->prenom}}
    </td>
              <td>
           

              @if($item->statu=='pay' )     
                  
                  <a class="btn btn-success disabled"  href="{{url('/pay/'.$item->id)}}">paid</a>
                  
              @else

            <a class="btn btn-warning"  href="{{url('/pay/'.$item->id)}}"> nopaid</a>

                  @endif
           
              
              </td>
     </tr>
         @endif
     @endforeach
    </tbody>
    
  </table>
@endsection
@endsection