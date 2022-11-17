@extends('user.layouts.master')
@section('content')
    {{--banner--}}
    @include('admin.layouts.notification')
    <section class="">
        <div class="row">
            <div id="banner-owl-demo" class="owl-carousel owl-theme">
                <div class="item col-md-12 p-0 ">
                    <div class="card rounded-0 p-0 border-0">
                        <div class="card-header p-0 border-0">
                            <div class="col-12 p-0 w-100" >
                                <img src="{{asset('/')}}images/cr7.jpg" alt="" style="height:600px;width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-md-12 p-0 ">
                    <div class="card rounded-0 p-0 border-0">
                        <div class="card-header p-0 border-0">
                            <div class="col-12 p-0 w-100">
                                <img src="{{asset('/')}}images/cr7-2.jpg" alt="" style="height:600px;width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-md-12 p-0 ">
                    <div class="card rounded-0 p-0 border-0">
                        <div class="card-header p-0 border-0">
                            <div class="col-12 p-0 w-100" >
                                <img src="{{asset('/')}}images/crick-1.jpg" alt="" style="height:600px;width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Main content--}}
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="card card-footer border-0 rounded-0 bg-white text-center">
                            <h5>Cricket News</h5>
                        </div>
                        @foreach($cricketBlogs as $item)
                        <div class="col-md-6 pb-4">
                            <div class="card pb-0 m-0 h-100">
                                <img src="{{asset('/')}}{{$item->image}}" class="rounded-top" height="200" alt="">
                                <div class="card-body pb-0">
                                    <a href="{{route('details.blog',$item->id)}}" class="text-decoration-none pb-5">{{substr($item->title,0,85)}}</a>
                                    <p class="text-muted small pt-2">{{$item->updated_at}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="card card-footer border-0 rounded-0 bg-white text-center">
                            <h5>Football News</h5>
                        </div>

                        @foreach($footballBlogs as $item)
                            <div class="col-md-6 pb-4">
                                <div class="card pb-0 m-0 h-100">
                                    <img src="{{asset('/')}}{{$item->image}}" class="rounded-top" height="200" alt="">
                                    <div class="card-body pb-0">
                                        <a href="{{route('details.blog',$item->id)}}" class="text-decoration-none pb-5">{{substr($item->title,0,85)}}</a>
                                        <p class="text-muted small pt-2">{{$item->updated_at}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Recent News</h5>
                        </div>
                        <div class="card-body pt-0">

                            <div class="card-body pt-0">
                                @foreach ($blogs as $item)
                                <div class="border-bottom py-3">
                                    <p class="text-muted small">{{$item->updated_at}}</p>
                                    <a href="{{route('details.blog',$item->id)}}" class="text-decoration-none">{{$item->title}}</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
