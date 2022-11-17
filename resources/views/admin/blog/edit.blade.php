@extends('admin.layouts.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                                <i class="fa fa-arrow-left"></i></a>Add Sports blogs</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Sports blog</li>
                            <li class="breadcrumb-item active">Sports blogs</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="text-center">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Author<span class="text-danger">*</span></label>
                                        <input type="text" name="author" class="form-control" value="{{$blog->author}}" placeholder="Author" required>
                                    </div>
                                    @error('author')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Title<span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" value="{{$blog->title}}" placeholder="title" required>
                                    </div>
                                    @error('title')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label for="category">Category Name *</label>
                                    <select name="category_id" class="form-control show-tick" required>
                                            <option value="">-- Category Name--</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$blog->category_id==$category->id?'selected':''}} >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Image:<span class="text-danger">*</span></label>
                                        <input type="file" name="image" class="form-control" value="{{$blog->image}}" placeholder="Image" required>
                                        <img src="{{asset('/')}}{{$blog->image}}" width="200" alt="">
                                    </div>
                                    @error('image')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea id="description" name="description" class="form-control" placeholder="Write some text...." required>{{$blog->description}}</textarea>
                                    </div>
                                    @error('description')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{route('blog.index')}}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
