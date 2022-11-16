@extends('admin.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"> <i class="fa fa-arrow-left"></i></a>Add Categories</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("admin.home")}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Category</li>
                            <li class="breadcrumb-item active">Add Categories</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="text-center">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label for="name">Category Name</label>
                                    <select name="name" class="form-control show-tick">
                                        <option value="">-- Category Name--</option>
                                        <option value="cricket" {{old('name')=='cricket'?'selected':''}} >Cricket</option>
                                        <option value="football" {{old('name')=='football'?'selected':''}}>Football</option>
                                        <option value="tennis" {{old('name')=='tennis'?'selected':''}}>Tennis</option>
                                        <option value="basketball" {{old('name')=='basketball'?'selected':''}}>Basketball</option>
                                    </select>
                                    @error('name')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Image:<span class="text-danger">*</span></label>
                                        <input type="file" name="image" class="form-control" value="{{old('image')}}" required placeholder="Image">
                                    </div>
                                    @error('image')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description" class="form-control" placeholder="Write some text....">{{old('description')}}</textarea>
                                    </div>
                                    @error('description')
                                    <div class="text-red-500 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('category.create')}}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
