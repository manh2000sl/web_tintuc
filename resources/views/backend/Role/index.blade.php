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
                        <h1 class="m-0">Danh sách quyền</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Danh sách quyền</li>
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
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="Search">
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
                                <table class="table table-hover  table-bordered" style="border: 1px">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Loại quyền</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{$role->id}}</td>
                                            <td>{{$role->name}}</td>
{{--                                            <td><a class="btn btn-xs btn-primary" role="button"--}}
{{--                                                   href="{{route('admin.role.edit',['id'=>$role->id])}}"><i--}}
{{--                                                        class="nav-icon fas fa-edit"></i> Edit</a>--}}
{{--                                                <form action="{{route('admin.role.destroy',['id'=>$role->id])}}"--}}
{{--                                                      method="post" onclick="return confirm('Bạn chắc chắn muốn xóa?')"--}}
{{--                                                      id="myFunction">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('delete')--}}
{{--                                                    <button type="submit" class="btn  btn-xs btn-danger"><i--}}
{{--                                                            class="fa-solid fas fa-trash"></i> Delete--}}
{{--                                                    </button>--}}
{{--                                                </form>--}}
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

