@extends('user.layouts.master')
@section('title') detail @endsection

@section('content')
    <section class="py-5 bg-light">
        <div class="container w-75">
            <div class="row">
                @include('admin.layouts.notification')
                <div class="col-md-4">
                    <img src="{{asset('/')}}images/author.jpg" alt="" class="" style="border-radius: 100%" height="70" width="70">
                    <span class="text-muted">By</span> <span class="fw-semibole text-uppercase">{{$blog->author}}</span>
                </div>
                <div class="col-md-8">
                    <p class="fw-semibold">{{$blog->title}}</p>
                    <p class="small">{{substr($blog->description,0,200)}}</p>

                </div>
                <div class="col-md-12">
                    <div>
                        <img src="{{asset('/')}}{{$blog->image}}" style="width: 100%" height="500" alt="">
                    </div>


                    <p class="small pt-3">{{substr($blog->description,200)}}</p>
                </div>

                <div class="col-md-12">
                    <h3>Comments</h3>
                    @foreach($comments as $comment)
                        <div class="row rounded-1 pb-2 mb-3" style="background-color: #cdfbc9; border: 2px">
                            <div class="col-md-6 pt-2">
                                <img src="{{asset('/')}}{{$comment->commenter_image}}" alt="" class="" style="border-radius: 100%" height="70" width="70">
                                <span class="fw-semibole pt-2">{{$comment->commenter_name}}</span>
                            </div>
                            <div class="col-md-6 pt-2">
                                <ul class="nav float-end">
                                    @auth
                                        @if($comment->user_id == auth()->user()->id)

                                            <li><a href="{{route('comment.delete',$comment->id)}}" class="nav-link text-decoration-none float-end">Delete</a></li>

                                            <li class="dropdown">
                                                <a href="" class="nav-link text-decoration-none float-end" data-bs-toggle="dropdown">Edit</a>
                                                <ul class="dropdown-menu mt-1">
                                                    <li>
{{--                                                        <a href="" class="dropdown-item nav-link">{{$comment->comment}}</a>--}}
                                                        <form action="{{route('comment.update',$comment->id)}}" method="POST">
                                                            @csrf
                                                            <div class="pt-0 mt-0" style="width: 810px;">
                                                                <div class="row pt-0 mt-0 nav-link">
                                                                    <div class="col-md-12">
                                                                        <textarea name="comment" id=""  class="form-control" cols="30" rows="2">{{$comment->comment}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="row m-0">
                                                                    <div class="">
                                                                        <input type="submit" class="ms-1 btn btn-sm btn-success" value="Update">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif
                                            <li><a href="" class="nav-link text-decoration-none float-end">Reply</a></li>
                                    @endauth
                                </ul>
{{--                                <a href="" class="text-decoration-none float-end">Reply</a>--}}
                            </div>
                            <div class="pt-2">
                                <p class="small text-muted">{{$comment->comment}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!--            comment submit-->
                <div class="col-md-12 bg-info rounded-1">
                    <h4>Leave a Comment</h4>
                    <div class="row">
                        <form action="{{route('user.comment')}}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="" class="">Your Comment</label>
                                <textarea name="comment" id="" class="form-control" cols="30" rows="5" required></textarea>
                                <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            </div>
                            <div class="col-md-12 py-3">
                                @auth
                                <input type="submit" class="btn btn-success form-control-sm" value="Submit"/>
                                @else
{{--                                <p id="comment" class="btn btn-success form-control-sm">Submit</p>--}}
                                    <input type="button" id="comment" class="btn btn-success form-control-sm" value="Submit"/>
                                @endauth
                            </div>
                        </form>

{{--                        <div class="col-md-6">--}}
{{--                            <label for="" class="">Your Name</label>--}}
{{--                            <input type="text" class="form-control">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <label for="" class="">Your Email</label>--}}
{{--                            <input type="email" class="form-control">--}}
{{--                        </div>--}}

{{--                        <div class="col-md-12">--}}
{{--                            <label for="" class="">Your Comment</label>--}}
{{--                            <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>--}}
{{--                        </div>--}}

{{--                        <div class="col-md-12 py-3">--}}
{{--                            <input type="submit" class="btn btn-success form-control-sm" value="Submit"/>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready ( function () {
            $("#comment").click(function () {
                alert("Log in First!");
            });
        });
    </script>
@endsection
