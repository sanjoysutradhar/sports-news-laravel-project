@extends('user.layouts.master')
@section('content')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row col-md-10 bg-white rounded-1 py-4">
                    <div class="col-md-3 border-end border-dark text-center ">
                        <img src="{{asset('/')}}{{$user->image}}" alt="" class="" style="border-radius: 100%" height="200" width="200">

                        <h4>{{$user->firstName.' '.$user->lastName}}</h4>
                        <a href="{{route('user.profileEdit')}}" class="text-center">Profile Edit</a>
                    </div>
                    <div class="col-md-9 ">
                        @include('admin.layouts.notification')
                        <div class="card">
                            <div class="card-header text-center">Edit profile</div>
                            <div class="card-body">
                                <form action="{{route('user.profileUpdate',$user->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="firstName" class="col-md-3">First Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="firstName" value="{{$user->firstName}}" required>
                                        </div>
                                        @error('firstName')
                                        <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="lastName" class="col-md-3">Last Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="lastName" value="{{$user->lastName}}" required>
                                        </div>
                                        @error('lastName')
                                        <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="phone" class="col-md-3">Phone</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="phone" value="{{$user->phone}}" required>
                                        </div>
                                        @error('phone')
                                        <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="address" class="col-md-3">Address</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="address" value="{{$user->address}}" required>
                                        </div>
                                        @error('address')
                                        <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="image" class="col-md-3">Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control mb-3" name="image">
                                            <img src="{{asset('/')}}{{$user->image}}" alt="" width="200">
                                        </div>
                                        @error('image')
                                        <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-3">Email</label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" class="btn btn-success" value="Update">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
