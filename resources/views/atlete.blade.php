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
   style="height: 50px"> @if(session()->has('count')){{session()->get("count").' members'}} @endif</div>
  <div class="col px-md-0 shadow pt-3 font-italic font-weight-bold rounded-pill " style="height: 50px;text-align:center;"> <span class="date-text"></span> | <span class="badge badge-warning p-2" id="ct"></span> </div>
</div>


<div class="row" style="height: 50px">
    <div class="col px-md-0" style="height: 50px"><a href="{{url('addatlete')}}" class="text-light"> <button class="btn btn-info ml-5 ">add atlete</button></a></div>
<div class="col px-md-0" style="height: 50px">
  <form action="{{ url('/searchatlete')}}" method="GET">
  <input type="search"  class="ml-1 rounded-pill form-control "name="search" style="width: 60%"  placeholder="search" />
  </form>
</div>
  </div>
 

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Last name</th>
        <th scope="col">tel</th>
        <th scope="col">date inscription</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
    
@foreach ($all as $item)
              
        
<tr>
  <th scope="row">{{ $item->name}}</th>
  <td>{{ $item->prenom}}</td>
  <td>{{ $item->tel}}</td> 
  <td>{{ $item->gender}}</td>
  <td>{{ $item->dateinscription}}</td>
  
  <td>
    <a href="{{ url('/editatlete/'.$item->id) }}" class="btn btn-warning">edit</a>
    <a href="{{ url('/deleteatlete/'.$item->id) }}"     class="btn btn-danger">delete</a>
     <script>
       function deletecheck() {
         confirm('are you sure');
         
       }
       </script>   
  </td>
</tr>
 @endforeach
    </tbody>
  </table>
  
@endsection
@endsection
