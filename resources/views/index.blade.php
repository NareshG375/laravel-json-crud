@extends('layouts.layout') 
@section('title')
JSON CRUD
@endsection
@section('content')
<div class="row  justify-content-center">
   <div class="col-md-12">
      <h1 class="mb-3">JSON CRUD Operations</h1>
      @if(session('success'))
      <div class="alert alert-success">
         {{ session('success') }}
      </div>
      @endif
      @if(session('error'))
      <div class="alert alert-error">
         {{ session('error') }}
      </div>
      @endif
      <a href="{{route('tests.create')}}" class="btn btn-sm btn-success">Add JSON </a>
      <table class="table table-strip">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th>First</th>
               <th>Email</th>
               <th>City</th>
               <th>Address</th>
               <th>Database Json</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            @forelse ($data as  $id=>$value)
            <tr>
               <th scope="row">{{$loop->iteration}}</th>
               <td>{{$value->meta_data['name']}}</td>
               <td>{{$value->meta_data['email']}}</td>
               <td>{{$value->meta_data['city']}}</td>
               <td>{{$value->meta_data['address']['street']}}  {{$value->meta_data['address']['area']}}  {{$value->meta_data['address']['pincode']}}</td>
               <td>{{$value}}</td>
               <td >
                  <div class="btn-group">
                     <a  href={{route("tests.show", $value->id)}} class="btn btn-sm btn-info">View</a>
                     <a href={{route("tests.edit",$value->id)}} class="btn btn-sm btn-warning">Edit</a>
                     <form action="{{route('tests.destroy',$value->id)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-sm btn-danger" onClick="return confirm('Are you want to delete this records')">Delete</button>
                     </form>
                  </div>
               </td>
            </tr>
            @empty
            <tr>
               <td colspan="7" class="text-center"> No Record Found </td>
            </tr>
            @endforelse   
         </tbody>
      </table>
   </div>
</div>
</div>
@endsection