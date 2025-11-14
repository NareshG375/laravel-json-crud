@extends('layouts.layout') 
    @section('title')
      JSON CRUD
    @endsection
    @section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Enter User Information</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('tests.store') }}" method="POST">
                        @csrf
                        <!-- Name -->
                        <div class="form-group mb-3">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control   @error('name')  is-invalid @enderror ">
                            <span class="text-danger">
                                @error('name')
                                  {{$message}}
                                @enderror
                            </span>
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control  @error('email')  is-invalid @enderror">
                            <span class="text-danger">
                                @error('email')
                                  {{$message}}
                                @enderror
                            </span>
                        </div>

                        <!-- City -->
                        <div class="form-group mb-3">
                            <label for="city">City <span class="text-danger">*</span></label>
                            <input type="text" name="city" class="form-control  @error('city')  is-invalid @enderror">
                            <span class="text-danger">
                                @error('city')
                                  {{$message}}
                                @enderror
                            </span>
                        </div>

                        <hr>
                        <h5>Address Details</h5>

                        <!-- Street -->
                        <div class="form-group mb-3">
                            <label for="street">Street <span class="text-danger">*</span></label>
                            <input type="text" name="street" class="form-control  @error('street')  is-invalid @enderror">
                            <span class="text-danger">
                                @error('street')
                                  {{$message}}
                                @enderror
                            </span>
                        </div>

                        <!-- Area -->
                        <div class="form-group mb-3">
                            <label for="area">Area / Locality <span class="text-danger">*</span></label>
                            <input type="text" name="area" class="form-control  @error('area')  is-invalid @enderror">
                            <span class="text-danger">
                                @error('area')
                                  {{$message}}
                                @enderror
                            </span>
                        </div>

                        <!-- Pincode -->
                        <div class="form-group mb-3">
                            <label for="pincode">Pincode <span class="text-danger">*</span></label>
                            <input type="text" name="pincode" class="form-control  @error('pincode')  is-invalid @enderror" maxlength=6 >
                            <span class="text-danger">
                                @error('pincode')
                                  {{$message}}
                                @enderror
                            </span>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Save JSON
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection