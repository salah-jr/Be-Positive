@extends('userpages.master')
@section('content')
  <br>
        <div class="container mt-5 mb-2"> 
        <div class="row">

            <div class="col-lg-3"></div>
      
            <div class="col-lg-6">
                <div class="card">
                <h3 class="card-header mt-0 text-center">&shy;{{$user->name}}</h3>  						
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><img src="users/usersimgages/{{$user->img}}"  alt="{{$user->img}}" width="100%"> </li>
                        </ul> 
                                
                        <ul class="list-unstyled text-right" style="direction: ltr">
                            <li>&shy;{{$user->city}} <i class="fa fa-home fa-lg mt-1"></i></li>
                            <li>&shy; {{$user->phone}} <i class="fa fa-phone fa-lg mt-1"></i></li>
                            <li>&shy;  {{$user->blood_type}} فصيلة الدم <i class="fa fa-opera fa-lg mt-1"></i> </li>
                            <li>&shy;   عدد التبرعات 20<i class="fa fa-opera fa-lg mt-1"></i> </li>
                        </ul>
                            <button class="btn btn-success"> <i class="fa fa-edit"></i> تعديل البيانات </button>
                        </div>
                    </div>
                </div>


             </div>
        </div>

@endsection