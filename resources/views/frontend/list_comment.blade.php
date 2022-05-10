@foreach($comments as $comment)
   @if(empty($comment))

   @else
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
            @if(Auth::user())
            <a href="javascript:;" id="repcmt_{{$comment->id}}" onclick="replyComment({{$comment->id}})" class="  btn-sm btn-primary" data-id="{{$comment->id}}">Trả lời</a>
            <form method="post" style="display: none" class="fRep form-repcmt-{{$comment->id}}">
                    <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20 "
                              name="content2" id="content-repcmt-{{$comment->id}}"
                              placeholder="Trả lời bình luận tại đây"> </textarea>
                <button type="button" onclick="submitReplyComment({{ $comment->id }})" id="send_rep_{{$comment->id}}"
                        class="send_rep size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10"
                        data-toggle="modal" data-target="#modelId"  data-id="{{$comment->id}}" >
                    Bình luận
                </button>
            </form>
            @else
               <p style="color: red">Mời bạn đăng nhập để bình luận</p>
            @endif
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

   @endif
@endforeach
