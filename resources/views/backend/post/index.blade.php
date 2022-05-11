@extends('backend.main' )
@push('css')
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.css"/>
@endpush
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Danh sách tin tức</h1>
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

                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover  table-bordered" id="table_index" style="border: 1px">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>title</th>
                                        <th>Image</th>
                                        <th>Danh mục</th>
                                        <th>Tóm tắt</th>
                                        <th>Tác giả</th>
                                        <th>Nổi bật</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày sửa</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
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


@endsection
@push('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
            src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.js"></script>
    <script>
        $(function () {
            $('#table_index').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.api') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    // { data: 'image', name: 'Ảnh' },
                    {
                        data: 'image_path',
                        ordertable: false,
                        searchable: false,
                        render: function (data, type, row, meta) {
                            return '<img style="width: 150px; height: 100px; object-fit: cover" src="' + data + '">';
                        }
                    },
                    {data: 'toTopic', name: '  toTopic'},
                    {
                        data: 'summary', name: 'summary',
                        targets: 4,
                        ordertable: false,
                        searchable: false,
                        render: function (data) {
                            return '<text>' + data  + '</text>';
                        }
                    },
                    {data: 'toUser', name: 'toUser'},
                    {data: 'highlight', name: 'highlight'},
                    {data: 'status', name: 'status'},
                    {data: 'updated_at', name: 'updated_at'},
                    {
                        data: 'edit',
                        targets: 9,
                        ordertable: false,
                        searchable: false,
                        render: function (data, type, row, meta) {
                            return '<a class="btn btn-xs btn-primary" role="button" href="' + data + '"><i class="nav-icon fas fa-edit"></i> Edit </a>';
                            // return '<a  href="${data}"><i class="nav-icon fas fa-edit"></i> Edit </a>';
                        }
                    },
                    {
                        data: 'delete',
                        targets: 10,
                        ordertable: false,
                        searchable: false,
                        render: function (data, type, row, meta) {
                            return '<form action="'+ data +'" method="post" "id="myFunction">' +
                                '@csrf' +
                                '@method('delete')' +
                                '<button type="submit" class="btn  btn-xs btn-danger"><i class="fa-solid fas fa-trash"></i>Delete</button></form>';
                        }
                    },
                ]
            });
        });
    </script>
@endpush
