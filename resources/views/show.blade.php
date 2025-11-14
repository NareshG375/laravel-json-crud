@extends('layouts.layout') 
@section('title')
    JSON CRUD
@endsection

@section('content')
    <div class="row  justify-content-center">
    <div class="col-md-12">
        <h2>Retrive JSON Data</h2>
        <table class="table table-strip">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th>First</th>
                <th>Email</th>
                <th>City</th>
                <th>Address</th>
                <th>Database Json</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->meta_data['name']}}</td>
                <td>{{$data->meta_data['email']}}</td>
                <td>{{$data->meta_data['city']}}</td>
                <td>{{$data->meta_data['address']['street']}}  {{$data->meta_data['address']['area']}}  {{$data->meta_data['address']['pincode']}}</td>
                <td>{{$data}}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a  href="{{route('tests.index')}}" class="btn btn-sm btn-info">Back</a>

        </div>
    </div>
    </div>
    </div>
@endsection