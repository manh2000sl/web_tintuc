@extends('backend.main' )
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Sửa bài viết</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sửa bài viết</li>
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
                                <h2 class="card-title">Sửa bài viết</h2>
                            </div>
                            <div class="col-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <h2>Vui lòng nhập lại</h2>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="card-body table-responsive p-0">
                                <tbody>
                                <div class="form-group">
                                    <form action="{{route('admin.author.update',['id'=>$posts->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Tiêu đề</label>
                                                <input type="text" class="form-control" value="{{$posts->title}}" name="input_title" id="InputTitle" onkeyup="ChangeToSlug()" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label>slug</label>
                                                <input type="text" class="form-control" id="convert_slug" name="convert_slug" value="{{$posts->slug}}"  >
                                            </div>
                                            <div class="form-group">
                                                <label>Lựa chọn danh mục</label>
                                                <select id="iput_topic" name="input_topic" class="custom-select" >

                                                    @foreach($topics as $topic)
                                                        <option
                                                            {{$topics->contains('id',$topic->id)?'selected':''}}
                                                            value="{{$topic->id}}">{{$topic->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputFile">Chọn ảnh mới</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input col-md-3" id="exampleInputFile" name="exampleInputFile">
                                                        <label class="custom-file-label col-md-3" for="exampleInputFile">Chọn ảnh</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="InputFile">Ảnh hiện tại</label>
                                                <div class="input-group">
                                                    <img style="width: 250px; height: 200px; object-fit: cover" src="{{$posts->image_path}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Tóm tắt</label>
                                                <textarea id="summernote" name="summernote">
                                                    {{$posts->summary}}
                                             </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Nội dung</label>
                                                <textarea id="summernote2" name="summernote2">
                                                    {{$posts->content}}
                                             </textarea>
                                            </div>
                                            {{--                                            <select id="iput_hight" name="iput_hight" class="custom-select" >--}}
                                            {{--                                                <option></option>--}}
                                            {{--                                                @foreach($topics as $topic)--}}
                                            {{--                                                    <option--}}
                                            {{--                                                        {{$topics->contains('highlight',$topic->highlight)? 'selected':''}}--}}
                                            {{--                                                        value="{{$topic->highlight}}">{{$topic->hightlight}}</option>--}}
                                            {{--                                                @endforeach--}}
                                            {{--                                            </select>--}}


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
    @push('js')
        <script type="text/javascript">

            function ChangeToSlug()
            {
                var slug;
                //Lấy text từ thẻ input title
                slug = document.getElementById("InputTitle").value;
                slug = slug.toLowerCase();
                //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
                document.getElementById('convert_slug').value = slug;
            }

        </script>
    @endpush
@stop()
