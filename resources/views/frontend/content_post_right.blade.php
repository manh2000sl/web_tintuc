<div class="col-md-10 col-lg-4">
    <div class="p-l-10 p-rl-0-sr991 p-b-20">
        <!--  -->
        <div>
            <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Tin tức nổi bật
                </h3>
            </div>

            <ul class="p-t-35">
                <li class="flex-wr-sb-s p-b-22">
                    @foreach($posts as $post)
                        <a href="{{route('index.detail',['slug'=>$post->slug])}}" class="size-w-4 wrap-pic-w hov1 trans-03">
                            <img src="{{$post->image_path}}" alt="IMG">
                            <br><br>
                        </a>
                        <div class="size-w-5">
                            <h6 class="p-b-5">
                        <a href="{{route('index.detail',['slug'=>$post->slug])}}"
                           class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                            {{$post->title}}
                            <br><br>
                        </a>
                            </h6>
                        </div>
                    @endforeach
                </li>
            </ul>
        </div>
        <!--  -->
        <div class="flex-c-s p-t-8">
            <a href="#">
                <img class="max-w-full" src="/images/banner-tuyen-sinh.gif" alt="IMG">
            </a>
        </div>
        <!--  -->
        <div class="p-t-50">
            <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Liên hệ với tôi
                </h3>
            </div>
            <ul class="p-t-35">
                <li class="flex-wr-sb-c p-b-20">
                    <a href="#"
                       class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
										<a href="https://www.facebook.com/profile.php?id=100006364149301">Đức Mạnh Nguyễn</a>
										</span>

                        <a href="https://www.facebook.com/photo/?fbid=3178062732415834&set=a.1383468421875283"
                           class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                            Like
                        </a>
                    </div>
                </li>
                <li class="flex-wr-sb-c p-b-20">
                    <a href="https://www.facebook.com/profile.php?id=100006364149301"
                       class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
                        <span class="fab fa-twitter"></span>
                    </a>
                    <div class="size-w-3 flex-wr-sb-c">

										<span class="f1-s-8 cl3 p-r-20">
                                             <a href="https://www.facebook.com/profile.php?id=100006364149301">
											Đức Mạnh Nguyễn
                                             </a>
										</span>

                        <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                            Follow
                        </a>
                    </div>
                </li>
                <li class="flex-wr-sb-c p-b-20">
                    <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
                        <span class="fab fa-youtube"></span>
                    </a>
                    <div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
									  <a href="https://www.facebook.com/profile.php?id=100006364149301">
											Đức Mạnh Nguyễn
                                             </a>
										</span>

                        <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                            Subscribe
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


