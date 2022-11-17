@extends('user.layouts.master')
@section('content')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">Registration Form</div>
                        <div class="card-body">
                            <form action="{{route('registration.submit')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="firstName" class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstName" value="{{old('firstName')}}" required>
                                    </div>
                                    @error('firstName')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="lastName" class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastName" value="{{old('lastName')}}" required>
                                    </div>
                                    @error('lastName')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="phone" class="col-md-3">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}" required>
                                    </div>
                                    @error('phone')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address" value="{{old('address')}}" required>
                                    </div>
                                    @error('address')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" value="{{old('image')}}" required>
                                    </div>
                                    @error('image')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                                    </div>
                                    @error('email')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="{{old('password')}}" required>
                                    </div>
                                    @error('password')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
