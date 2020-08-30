@extends('master')
@section('content')

@extends('navbar')
@section('nav')
<style>
    .pass_show{position: relative} 

.pass_show .ptxt { 

position: absolute; 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{color: #333333;} 
.pa{
 margin-top: 30px;
}
</style>

<script>

</script>
<div class="container">
    @if(session()->has('msg'))
    <div class="alert alert-danger" role="alert">
      {{session()->get("msg")}}
      @endif
    
    </div>
	<div class="row">
		<div class="col-sm-4 pa">
        <form action="{{url('updateamount')}}" method="post" onsubmit="check()">
            @csrf

@method('PUT')
		    <label>Current amount</label>
		    <div class="form-group pass_show"> 
                <input type="number" name="Current" class="form-control" placeholder="Current amount"> 
            </div> 
		       <label>New amount</label>
            <div class="form-group pass_show"> 
                <input type="number" name="new" class="form-control" placeholder="New amount"> 
            </div> 
		       <label>Confirm amount</label>
            <div class="form-group pass_show"> 
                <input type="number" name="Confirm" class="form-control" placeholder="Confirm amount"> 
            </div> 
            <div class="form-group">
                <button class="btn btn-info m-5" type="submit">change</button>
            <button class="btn btn-warning"><a href="{{url('/settings')}}"> cancel</a></button>
            </div>
            </form>
		</div>  
	</div>
</div>
@endsection
@endsection