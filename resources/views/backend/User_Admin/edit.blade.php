@extends('backend.main' )
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Thêm thành viên</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active">Thêm thành viên</li>
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
                                <h2 class="card-title">Thêm thành viên</h2>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <tbody>
                                <div class="form-group">
                                    <form action="{{route('admin.user.update',['id'=>$user->id])}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Tên tài khoản</label>
                                                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="" value="{{$user->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Gmail</label>
                                                <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="" value="{{$user->email}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Cập nhật mật khẩu mới (Có thể bỏ qua)</label>
                                                <input type="password" class="form-control" name="InputPass" id="InputPass" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label>Lựa chọn quyền hạn cho user trong hệ thống</label>
                                                <select id="Role_Id" name="Role_Id" class="custom-select">

                                                    @foreach($roles as $role)
                                                        <option
                                                            {{$roleOfUser->contains('id',$role->id)? 'selected':''}}
                                                            value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
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
