@extends('backend.main' )
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Thêm tin mới</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Thêm tin mới</li>
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
                                <h2 class="card-title">Thêm tin mới</h2>
                            </div>

                            <div class="col-12">
                                @error('errorTitle')
                                <h1 style="color: red">{{$message}}</h1>
                                @enderror
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <tbody>
                                <div class="form-group">
                                    <form action="{{route('admin.author.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Tiêu đề (<span style="color: red">*</span>)</label>
                                                <input type="text" class="form-control" name="InputTitle"
                                                       id="InputTitle" onkeyup="ChangeToSlug()" placeholder="">
                                                @error('InputTitle')
                                                <span style="color: red">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="title">slug (<span style="color: red">*</span>)</label>
                                                <input type="text" class="form-control" name="convert_slug"
                                                       id="convert_slug" placeholder="">
                                                @error('InputTitle')
                                                <span style="color: red">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Lựa chọn danh mục(<span style="color: red">*</span>)</label>
                                                <select id="iput_topic" name="input_topic" class="custom-select">
                                                    <option></option>
                                                    @foreach($topics as $topic)
                                                        <option value="{{$topic->id}}">{{$topic->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('input_topic')
                                            <span style="color: red">{{$message}}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label for="InputFile">Upload ảnh (<span style="color: red">*</span>)</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input col-md-3"
                                                               id="exampleInputFile" name="exampleInputFile">
                                                        <label class="custom-file-label col-md-3"
                                                               for="exampleInputFile">Chọn ảnh</label>
                                                    </div>
                                                </div>
                                                @error('exampleInputFile')
                                                <span style="color: red">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="title">Tóm tắt (<span style="color: red">*</span>)</label>
                                                <textarea id="summernote" name="summernote">
                                             </textarea>
                                                @error('summernote')
                                                <span style="color: red">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Nội dung (<span style="color: red">*</span>)</label>
                                                <textarea id="summernote2" name="summernote2">
                                             </textarea>
                                                @error('summernote2')
                                                <span style="color: red">{{$message}}</span>
                                                @enderror
                                            </div>
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
