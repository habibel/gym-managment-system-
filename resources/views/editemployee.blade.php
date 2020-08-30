@extends('master')
@section('content')
@extends('navbar')
@section('nav')

<main class="login-form mt-5">
    <div class="cotainer">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
     <div class="card-header">edit employee
     </div>
    <div class="card-body">
    <form action="{{ url('/updateemployee/'.$item->id) }}" method="post">
    @csrf
    
    @method('PUT')
    <div class="form-group row">
     <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
      <div class="col-md-6">
    <input type="text" id="name" class="form-control" name="name" value="{{ $item->name}}" required autofocus>
    </div></div>
     <div class="form-group row">
     <label for="last_name" class="col-md-4 col-form-label text-md-right">Prenom</label>
     <div class="col-md-6">
     <input type="text" id="last_name" class="form-control" name="last_name" value="{{ $item->prenom}}" required autofocus>
     </div></div>
     <div class="form-group row">
      <label for="tel" class="col-md-4 col-form-label text-md-right">tel</label>
      <div class="col-md-6">
      <input type="tel" id="tel" class="form-control" name="tel" value="{{ $item->tel}}" required autofocus>
       </div></div>
    
       <div class="form-group row">
        <label for="gender" class="col-md-4 col-form-label text-md-right">gender</label>
         <div class="col-md-2">
         male
         <input type="radio" id="gender" checked name="gender" value="male" required autofocus>
         female
         <input type="radio" id="gender"         name="gender" value="female" required autofocus>
                                          
                                        </div>
                                    </div>
                                    <div class="form-group row">
     <label for="saliare" class="col-md-4 col-form-label text-md-right">saliare</label>
      <div class="col-md-6">
    <input type="text" id="saliare" class="form-control" name="saliare" value="{{ $item->saliare}}" required autofocus>
    </div></div>
    
     <div class="col-md-6 offset-md-2">
    <input type="submit" name="submit" value=" edit" class="btn btn-primary">
    <button class="btn btn-warning"><a href="{{url('/employee')}}"> cancel</a></button>
    </div>
     </div>
        </form>
        </div>
    </div>
     </div>
        </div>
        </div>
    
    </main>
    
    @endsection

@endsection
