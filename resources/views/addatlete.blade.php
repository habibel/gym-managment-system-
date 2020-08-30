@extends('master')
@section('content')
@extends('navbar')
@section('nav')


<main class="login-form mt-5">
<div class="cotainer">
<div class="row justify-content-center">
<div class="col-md-8">
 <div class="card">
 <div class="card-header">Add atlete
</div>
 <div class="card-body">
 <form action="{{url('/storea')}}" method="POST">
 @csrf
<div class="form-group row">
<label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
<div class="col-md-6">
 <input type="text" id="name" class="form-control" name="name" required autofocus>
             </div></div>
    <div class="form-group row">
 <label for="last_name" class="col-md-4 col-form-label text-md-right">Prenom</label>
  <div class="col-md-6">
    <input type="text" id="last_name" class="form-control" name="last_name" required autofocus>
   </div> </div>
   <div class="form-group row">
 <label for="tel" class="col-md-4 col-form-label text-md-right">tel</label>
 <div class="col-md-6">
 <input type="tel" id="tel" class="form-control" name="tel" required autofocus>
 </div> </div>
 <div class="form-group row">
<label for="gender" class="col-md-4 col-form-label text-md-right">gender</label>
 <div class="col-md-2">
 male
 <input type="radio" id="gender" checked name="gender" value="male" required autofocus>
 female
 <input type="radio" id="gender"         name="gender" value="female" required autofocus>
   </div></div>
 <div class="col-md-6 offset-md-2">
 <input type="submit" name="submit" value=" Register" class="btn btn-primary">                              
</div> </div> </form> </div> </div> </div> </div> </div>

</main>



@endsection
@endsection