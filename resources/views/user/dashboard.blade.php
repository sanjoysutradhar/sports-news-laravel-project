@extends('user.layouts.master')
@section('content')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row col-md-10 bg-white rounded-1 py-5">
                    <div class="col-md-3 border-end border-dark text-center ">
                        <img src="{{$user->image}}" alt="" class="" style="border-radius: 100%" height="200" width="200">

                        <h4>{{$user->firstName.' '.$user->lastName}}</h4>
                        <a href="{{route('user.profileEdit')}}" class="text-center">Profile Edit</a>
                    </div>
                    <div class="col-md-9 text-center pt-5">
                        <p class="text-center">{{$user->firstName.' '.$user->lastName}}</p>
                        <p class="text-center">{{$user->phone}}</p>
                        <p class="text-center">{{$user->email}}</p>
                        <p class="text-center">{{$user->address}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
