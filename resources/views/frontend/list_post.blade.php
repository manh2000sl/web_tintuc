@extends('layouts.app')
@section('content_left')
    @if(empty($postOfIds))\
    <div class="container">
        <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
            <div class="f2-s-1 p-r-30 m-tb-6">
        <h2>không có mục này</h2>
            </div>
        </div>
    </div>
    @else
    <div class="container">
        <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
            <div class="f2-s-1 p-r-30 m-tb-6">
                <a href="" class="breadcrumb-item f1-s-3 cl9">
                    Home
                </a>
                <a class="breadcrumb-item f1-s-3 cl9">
                    Blog
                </a>
            </div>
            <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
                <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
                <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
        </div>
    </div>'
    <div class="container p-t-4 p-b-40">
        <h2 class="f1-l-1 cl2">
            {{$topics_1->name}}
        </h2>
    </div>
    <div class="col-md-10 col-lg-8 p-b-80">
        <div class="p-r-10 p-r-0-sr991">
            <div class="m-t--40 p-b-40">
                <!-- Item post -->
                @foreach($postOfIds  as $post)
                    <div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
                        <a href="{{route('index.detail',['slug'=>$post->slug])}}" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                            <img src="{{$post->image_path}}" alt="IMG">
                        </a>

                        <div class="size-w-9 w-full-sr575 m-b-25">
                            <h5 class="p-b-12">
                                <a href="{{route('index.detail',['slug'=>$post->slug])}}" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                    {{$post->title}}
                                </a>
                            </h5>

                            <div class="cl8 p-b-18">
                                <a href="{{route('index.detail',['slug'=>$post->slug])}}" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    {{$post->toUser->name}}
                                </a>

                                <span class="f1-s-3 m-rl-3">
											-
										</span>

                                   <span class="f1-s-3">
                                {{$post->updated_at}}
										</span>
                            </div>

                            <p class="f1-s-1 cl6 p-b-24">
                                Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra magna
                            </p>

                            <a href="{{route('index.detail',['slug'=>$post->slug])}}" class="f1-s-1 cl9 hov-cl10 trans-03">
                                Read More
                                <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    @endif
@endsection
