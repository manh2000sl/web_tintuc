
<div class="bg2 p-t-40 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-b-20">
                <div class="size-h-3 flex-s-c">
                    <a href="{{route('index.home')}}">
                        <img class="max-s-full" src="/images/icons/logo-02.png" alt="LOGO">
                    </a>
                </div>

                <div>
                    <p class="f1-s-1 cl11 p-b-16">
                        Quản lý nội dung: Nguyễn Đức Mạnh<br>
                        Email: info@omt.vn<br>
                        Điện thoại: 024.73095555<br>
                        VPĐD tại TP.HN: Tầng 4, Tòa nhà 27<br>
                        © Copyright 2010 - 2022 - Công ty Cổ phần xxxx<br>
                        Tầng 4 Toà nhà OMT - Số nhà 27 Ngõ 59 P. Láng Hạ, Chợ Dừa, Đống Đa, Hà Nội.<br>
                        Trang tin điện tử trên internet: Giấy phép số 460/GP-TTĐT do Sở Thông tin và Truyền thông Hà Nội cấp ngày 03/02/2016
                    </p>
                    <div class="">
                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-pinterest-p"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-vimeo-v"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 p-b-20">
                <div class="size-h-3 flex-s-c">
                    <h5 class="f1-m-7 cl0">
                        Popular Posts
                    </h5>
                </div>

                <ul>


                    <li class="flex-wr-sb-s p-b-20">
                        @foreach($posts as $post)
                            <a href="{{route('index.detail',['slug'=>$post->slug])}}" class="size-w-4 wrap-pic-w hov1 trans-03">
                                <img src="{{$post->image_path}}" alt="IMG">
                                <br><br>
                            </a>
                            <div class="size-w-5">
                                <h6 class="p-b-5">
                                    <a href="{{route('index.detail',['slug'=>$post->slug])}}" class="f1-s-5 cl11 hov-cl10 trans-03">
                                        {{$post->title}}
                                    </a>
                                </h6>

                                <span class="f1-s-3 cl6">

									</span>
                            </div>
                        @endforeach
                    </li>


                </ul>
            </div>

            <div class="col-sm-6 col-lg-4 p-b-20">
                <div class="size-h-3 flex-s-c">
                    <h5 class="f1-m-7 cl0">
                       Danh mục
                    </h5>
                </div>

                <ul class="m-t--12">



                        @foreach($menuTop as $topicTop)
                            <li  class="how-bor1 p-rl-5 p-tb-10">
                                <a class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8" href="{{route('index.show',['slug'=>$topicTop->slug])}}">{{$topicTop->name}}</a>
                            </li>
                        @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

