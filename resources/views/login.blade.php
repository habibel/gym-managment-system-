@extends('master')
@section('content')



<main class="login-form mt-5">
<div class="cotainer">
 <div class="row justify-content-center">
 <div class="col-md-8">
<div class="card">
<div class="card-header">Register</div>
 <div class="card-body">
 <form action="{{url('/log')}}" method="post">
  @csrf
  @if(session()->has('msg'))
  <div class="alert alert-danger" role="alert">
    {{session()->get("msg")}}
  </div>
 
  @endif
 <div class="form-group row">
<label for="email_address" class="col-md-4 col-form-label text-md-right">User Name</label>
 <div class="col-md-6">
 <input type="text" id="email_address" class="form-control" name="user_name" required autofocus>
 </div>
</div>

<div class="form-group row">
<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
 <div class="col-md-6">
 <input type="password" id="password" class="form-control" name="password" required>
</div>
</div>

<div class="col-md-6 offset-md-4">
  <button type="submit" class="btn btn-primary">Register </button> </div>
     </div>
     </form>
 </div> </div>
        </div>
    </div>
    </div>

</main>





@endsection