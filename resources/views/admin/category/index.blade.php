@extends('admin.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Category</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("admin.home")}}"><i class="icon-home"></i></a></li>
                        </ul>
                        <p class="float-right">Total Category: </p>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <!-- /notification -->
                    @include('admin.layouts.notification')
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Photo</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td><img src="{{asset('/')}}{{$item->image}}" style="width:100px; !important " alt=""></td>
{{--                                        <td></td>--}}
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                            <a href="{{route('category.edit',$item->id)}}" title="edit" class="float-left btn btn-sm btn-outline-warning" ><i class="fas fa-edit"></i></a>
{{--                                            <a href="" onclick="return confirm('Are you Sure to Delete this..')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>--}}
                                            <form action="{{route('category.destroy',$item->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('Are you Sure to Delete this..')"
                                                        class="btn btn-sm btn-outline-danger" >
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
