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
                        <h1 class="m-0">Danh sách thành viên</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Danh sách thành viên</li>
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
                                        <th >Tên người dùng</th>
                                        <th >Gmail</th>
                                        <th >Quyền</th>
                                        <th >Ngày tạo</th>
                                        <th >Ngày cập nhật</th>
                                        <th >Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td >{{$user->name}}</td>
                                            <td >{{$user->email}}</td>
                                            @foreach($user->roles as $user_name)
                                            <td >{{$user_name->name}}</td>
                                            @endforeach
                                            <td >{{$user->created_at}}</td>
                                            <td >{{$user->updated_at}}</td>
                                            <td> <a class="btn btn-xs btn-primary" role="button" href="{{route('admin.user.edit',['id'=>$user->id])}}"><i class="nav-icon fas fa-edit"></i> Edit</a>
                                                <form action="{{route('admin.user.destroy',['id'=>$user->id])}}"
                                                      method="post" onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                                      id="myFunction">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn  btn-xs btn-danger"><i
                                                            class="fa-solid fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@stop()

