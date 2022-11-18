@extends('user.layouts.master')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($footballBlogs as $item)
                    <div class="col-md-3 pb-4">
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
    </section>
@endsection
