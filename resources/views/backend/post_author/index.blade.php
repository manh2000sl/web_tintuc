@extends('backend.main' )
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Danh sách tin tức của tác giả</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Danh sách tin tức</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">

                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

                                <div class="card-tools">

                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover  table-bordered" style="border: 1px" >
                                    <thead>
                                    <tr >
                                        <th >ID</th>
                                        <th >Tiêu đề</th>
                                        <th >Image</th>
                                        <th>Danh mục</th>
                                        <th>Tóm tắt</th>
                                        <th>Nổi bật</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($post_of_user as $post)

                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td >{{$post->title}}</td>
                                            <td >
                                                <img style="width: 150px; height: 100px; object-fit: cover" src="{{$post->image_path}}">
                                            </td>
                                            <td >{{$post->toTopic->name}}</td>
                                            <td >{{$post->summary}}</td>
                                            @if($post->highlight == 0)
                                                <td><span class="badge badge-danger"> Ẩn </span></td>
                                            @else
                                                <td><span class="badge badge-success"> Hiện </span></td>
                                            @endif
                                            @if($post->status ==0)
                                                <td><span class="badge badge-danger"> Ẩn </span></td>
                                            @else
                                                <td><span class="badge badge-success"> Hiện </span></td>
                                            @endif
                                            @if($post->status ==0)
                                            <td> <a class="btn btn-xs btn-primary" role="button" href="{{route('admin.author.edit',['id'=>$post->id])}}"><i class="nav-icon fas fa-edit"></i> Edit</a>
                                            @else
                                                <td> <p class="btn btn-xs btn-danger" role="button" href="">Không được sửa</p>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
    </div>
@stop()
