@extends('master')
@section('content')
@extends('navbar')
@section('nav')


<h2> sutuation of this atlete  in this month </h2>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">month</th>
        <th scope="col">statu</th>
        
      </tr>
    </thead>
    <tbody>
     @foreach ($all as $item)
   
     <tr>
     <td>
       {{$item->name}}
     </td> 
     <td>
      {{$item->prenom}}
    </td>
    <td>
        {{$item->month}}
      </td>
              <td>
           

              @if($item->statu=='pay' )     
                  
                  <a class="btn btn-success"  >paid</a>
                  
              @else

            <a class="btn btn-warning"  > nopaid</a>

                  @endif
           
              
              </td>
     </tr>
         
     @endforeach
    </tbody>
    
  </table>


@endsection
@endsection