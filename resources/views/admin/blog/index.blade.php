@extends('admin.layouts.master')
@section('content')
    <!-- main content  -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Sports blog</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('blog.create')}}">Add Blog</a></li>
                        </ul>
                        <p class="float-right">Total Sports blog: </p>
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
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Category Name</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $item)
                                    <tr>
                                        <td>{{$item->author}}</td>
                                        <td>{{substr($item->title,0,20).'...'}}</td>
                                        @php
                                        $id=$item->category_id;
                                        $category=\App\Models\Category::where('id',$id)->first();
                                        @endphp

                                        <td>{{$category->name}}</td>
                                        <td>{{substr($item->description,0,20).'...'}}</td>
                                        <td><img src="{{asset('/')}}{{$item->image}}" width="100" alt=""></td>
                                        <td>

                                            <input type="checkbox" name="toggle" value="{{$item->id}}"
                                                   data-toggle="toggle" {{$item->status=='active' ? 'checked' : '' }}
                                                   data-on="active" data-off="inactive"
                                                   data-size="sm" data-onstyle="success" data-offstyle="danger">
                                        </td>
                                        <td>
                                            <a href="{{route('blog.edit',$item->id)}}" title="edit" class="float-left btn btn-sm btn-outline-warning" ><i class="fas fa-edit"></i></a>
                                            {{--                                            <a href="" onclick="return confirm('Are you Sure to Delete this..')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>--}}
                                            <form action="{{route('blog.destroy',$item->id)}}" method="POST">
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
@section('script')
    <script>
        $('input[name=toggle]').change(function(){
            var mode = $(this).prop('checked');
            var id=$(this).val()
            $.ajax({
                url:"{{route('blog.status')}}",
                type:"POST",
                data:{
                    _token:'{{csrf_token()}}',
                    mode:mode,
                    id:id,
                },
                success:function(response){
                    console.log(response);
                    if(response.status){
                        alert(response.msg);
                    }
                    else{
                        alert('please try again');
                    }
                },
                error:function () {
                    alert('SomeThing is wrong');
                }
            })
        });
    </script>

@endsection
