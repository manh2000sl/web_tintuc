
@extends('backend.main' )
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Thêm quyền hạn</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sửa quyền</li>
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
                                <h2 class="card-title">Quyền</h2>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <tbody>
                                <div class="form-group">
                                    <form action="{{route('admin.role.store')}}" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Vai trò</label>
                                                <input type="text" class="form-control" id="input_title" placeholder="" name="name" value="">

                                            </div>
                                            @foreach($permission_parent as $permissionParentItem)
                                                <div class="card mb-3 col-md-12">

                                                    <h4 class="card-header">
                                                        module {{$permissionParentItem->name}}
                                                    </h4>
                                                    <div class="row">
                                                        @foreach($permissionParentItem->permissionChildrent as $permissionChildrentItem)
                                                            <div class="card-body text-primary col-md-4">
                                                                <h4 class="card-title">
                                                                    <label>
                                                                        <input type="checkbox" name="permission_id[]" value="{{$permissionChildrentItem->id}}">
                                                                    </label>
                                                                 {{$permissionChildrentItem->name}}
                                                                </h4>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach



                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </form>
                                </div>
                                </tbody>

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
