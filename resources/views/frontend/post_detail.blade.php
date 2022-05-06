@extends('layouts.app')
@section('content_left')
    @if(empty($post))
        <h2>không có mục này</h2>
    @else
    <div class="col-md-10 col-lg-8 p-b-30">
        <div class="p-r-10 p-r-0-sr991">
            <!-- Blog Detail -->
            <div class="p-b-70">
                <h1 href="#" class="f1-l-1 cl2 text-danger">
                    {{$post->toTopic->name}}
                </h1>
                <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                    {{$post->title}}
                </h3>

                <div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										{{$post->toUser->name}}
									</a>

									<span class="m-rl-3">-</span>

									<span>
										{{$post->updated_at}}
									</span>
								</span>

                </div>

                <div class="wrap-pic-max-w p-b-30">
                    <img src="{{$post->image_path}}" alt="IMG">
                </div>

                <p class="f1-s-11 cl6 p-b-25">
                    {!! $post->summary !!}
                </p>

                <p class="f1-s-11 cl6 p-b-25">
                    {!! $post->content !!}
                </p>
            </div>

            <!-- Leave a comment -->
            <div>
                <div class="comments-area">
                    <h4>Comments</h4>
                    <div class="comment-list">
                        {{--                        @include('clinet.show_comment', ['comments' => $blog_detail->comments, 'post_id' =>$blog_detail->id])--}}
                    </div>
                </div>
                {{--            ///////////////////////////////////--}}
                <h2 class="f1-l-4 cl3 p-b-12">viết bình luận của bạn</h2>
                @if(Auth::user())
                <input type="hidden" value="{{$post->id}}" name="post_id">
                <form id="form1" method="POST" data-action="{{route('ajax.comment',['post'=>$post->id])}}">
                    <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="comment"
                              placeholder="Viết bình luận tại đây" id="comment"></textarea>
                    <button type="submit" class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10"
                            id="btn_comment" data-toggle="modal" data-target="#modelId">
                        Bình luận
                    </button>
                </form>
                @else
                    <p style="color: red">Mời bạn đăng nhập để bình luận</p>
                @endif
                <br>

            </div>

        </div>
        <div id="ok">
            @include('frontend.list_comment',['comments'=>$comment1])
        </div>
    </div>

@endsection
@push('js')
    <script>
        var _commentUrl = '{{route('ajax.comment',$post->id)}}';
        var _csrf = '{{csrf_token()}}';
        $('#btn_comment').click(function (ev) {
                ev.preventDefault();
                var comment = $('#comment').val();

                $.ajax({
                    url: _commentUrl,
                    type: 'post',
                    data: {
                        comment: comment,
                        _token: _csrf,
                    },
                    success: function (request) {
                        $('#ok').html(request);
                    }
                })
            }
        );
    $('#repcmt').click(function (e){
        e.preventDefault();
        var id = $(this).data('id');
        var form_repcmt = '.form-repcmt-'+id;
            $('.fRep').slideUp();
            $(form_repcmt).slideDown();
        var comment = $('#comment').val();
        var cmt_rep_ID ='content-repcmt-'+id;
        var content_rep=$('cmt_rep_ID').val();
    });
        // $(document).on('click','#send_rep',function (e)
        $('#send_rep').click(function (e){
            e.preventDefault();
            var id = $(this).data('id');
            var cmt_rep_ID = '#content-repcmt-' + id;
            var content_rep = $(cmt_rep_ID).val();
            var form_repcmt = '.form-repcmt-'+id;
            $.ajax({
                url: _commentUrl,
                type: 'post',
                data: {
                    comment: content_rep,
                    parent_id: id,
                    _token: _csrf,
                },
                success: function (request) {
                    $('#ok').html(request);
                }
            })
        })
</script>
@endpush
@endif
