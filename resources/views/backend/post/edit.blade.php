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
                                    <form action="{{route('admin.update',['id'=>$posts->id])}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">Tiêu đề</label>
                                                <input type="text" class="form-control" value="{{$posts->title}}"
                                                       name="InputTitle" id="InputTitle" onkeyup="ChangeToSlug()"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label>slug</label>
                                                <input type="text" class="form-control" id="convert_slug"
                                                       name="convert_slug" value="{{$posts->slug}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Lựa chọn danh mục</label>
                                                <select id="iput_topic" name="input_topic" class="custom-select">

                                                    @foreach($topics as $topic)
                                                        <option
                                                            value="{{$topic->id}}" {{$topic->id == $topicsOfPost->id ?'selected':'' }} >{{$topic->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputFile">Chọn ảnh mới</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input col-md-3"
                                                               id="exampleInputFile" name="exampleInputFile">
                                                        <label class="custom-file-label col-md-3"
                                                               for="exampleInputFile">Chọn ảnh</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="InputFile">Ảnh hiện tại</label>
                                                <div class="input-group">
                                                    <img style="width: 250px; height: 200px; object-fit: cover"
                                                         src="{{$posts->image_path}}">
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
                                            <div class="form-check">
                                                <label class="form-check-label" for="InputFile"> Hiển thị lên màn
                                                    hình </label>
                                                <br>
                                                <input type="radio" class="form-check-input" name="status"
                                                       {{$posts->status==1?'checked':''}} value="1">có
                                                <br>
                                                <input type="radio" class="form-check-input" name="status"
                                                       {{$posts->status==0?'checked':''}} value="0">không
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label" for="InputFile"> Hiển thị lên trang nổi
                                                    bật </label>
                                                <br>
                                                <input type="radio" class="form-check-input" name="highlight"
                                                       {{$posts->highlight==1?'checked':''}} value="1">có
                                                <br>
                                                <input type="radio" class="form-check-input" name="highlight"
                                                       {{$posts->highlight==0?'checked':''}} value="0">không
                                            </div>

                                            <br>
                                            {{--            edit comment                                ////////////////////////////////////////--}}
                                            <h1>Duyệt bình luận</h1>
                                            @foreach($comments as $comment)
                                                <div class="media pt-4 ">
                                                    <a class="pull_left mr-3" href="#">
                                                        <img
                                                            src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper.png"
                                                            alt="Image" width="120px">
                                                    </a>
                                                    <div class="media-body bo-1-rad-5 bocl13 px-3 py-3">
                                                        <h5 class="f1-l-2 cl3 p-b-12">{{$comment->user->name}}</h5>
                                                        <p>{{$comment->content}}</p>
                                                        <br>
                                                        <div class="form-check float-right btn-sm">
                                                            <label class="form-check-label" for="InputFile"> Hiển thị
                                                                lên màn hình </label>
                                                            <br>
                                                            <input type="radio"
                                                                   class="form-check-input  check-input-comment"
                                                                   data-id="{{$comment->id}}"
                                                                   name="status_comment[{{$comment->id}}]"
                                                                   {{$comment->status==0?'checked':''}} value="0">không
                                                            <br>
                                                            <input type="radio"
                                                                   class="form-check-input  check-input-comment"
                                                                   data-id="{{$comment->id}}"
                                                                   name="status_comment[{{$comment->id}}]"
                                                                   {{$comment->status==1?'checked':''}} value="1">có
                                                            <br>
                                                        </div>
                                                        {{--            ///////////////////////////////////////////////////////////////////--}}
                                                        @foreach($comment->repcmt as $repcmt)
                                                            <div class="media pt-4 ">
                                                                <a class="pull_left mr-3" href="#">
                                                                    <img
                                                                        src="https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper.png"
                                                                        alt="Image" width="120px">
                                                                </a>
                                                                <div class="media-body bo-1-rad-5 bocl13 px-3 py-3">
                                                                    <h5 class="f1-l-2 cl3 p-b-12">{{$repcmt->user->name}}</h5>
                                                                    <p>{{$repcmt->content}}</p>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="clearfix">
                                            {{$comments->links()}}
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
@push('js')
{{--    <script type="text/javascript">--}}
{{--        var _csrf = '{{csrf_token()}}';--}}
{{--        $('.check-input-comment').click(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            var id = $(this).data('id');--}}
{{--            var status = $("[type='radio']:checked").val();--}}
{{--            alert(status);--}}
{{--            $.ajax({--}}
{{--                url: "{{route('admin.comment')}}",--}}
{{--                type: "post",--}}
{{--                data: {--}}
{{--                    status: status,--}}
{{--                    _token: _csrf,--}}
{{--                },--}}
{{--                success: function (result) {--}}
{{--                    alert(result);--}}
{{--                }--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}
@endpush
