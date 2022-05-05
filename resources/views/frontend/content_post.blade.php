@section('content_left')
    <div class="col-md-10 col-lg-8">
        <div class="p-b-20">
            <!-- Entertainment -->
            <div class="tab01 p-b-20">

                <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                    <!-- Brand tab -->
                    <a href="{{route('index.show',['slug'=>$topics13->slug])}}">
                        <h3 class="f1-m-2 cl12 tab01-title">
                            {{$topics13->name}}
                        </h3>
                    </a>

                </div>
                <!-- Tab panes -->
                <div class="tab-content p-t-35">

                    <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                <!-- Item post -->
                                <div class="m-b-30">
                                    @if(isset($postOfId13[0]))
                                        <a href="{{route('index.detail',['slug'=>$postOfId13[0]->slug])}}"
                                           class="wrap-pic-w hov1 trans-03">
                                            <img
                                                style="width: 320px; height: 240px; object-fit: cover"
                                                src="{{$postOfId13[0]->image_path}}">
                                        </a>
                                        <div class="p-t-20">
                                            <h5 class="p-b-5">
                                                <a href=""
                                                   class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    {{$postOfId13[0]->title}}
                                                </a>
                                            </h5>
                                            <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId13[0]->slug])}}" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                            {{$postOfId13[0]->toUser->name}}
														</a>
														<span class="f1-s-3 m-rl-3">
															-
														</span>
														<span class="f1-s-3">
                                                             {{$postOfId13[0]->updated_at}}
														    </span>
													</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if(isset($postOfId13[1]))
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <!-- Item post -->
                                    @if(isset($postOfId13[1]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$postOfId13[1]->slug])}}"
                                               class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$postOfId13[1]->image_path}}" alt="IMG">
                                            </a>
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$postOfId13[1]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$postOfId13[1]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId13[1]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                            {{$postOfId13[1]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
                                                            {{$postOfId13[1]->updated_at}}

														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($postOfId13[2]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$postOfId13[2]->slug])}}"
                                               class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$postOfId13[2]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$postOfId13[2]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$postOfId13[2]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId13[2]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                            {{$postOfId13[2]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
                                                            {{$postOfId13[2]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($postOfId13[3]))
                                        <div class="flex-wr-sb-s m-b-30">

                                            <a href="{{route('index.detail',['slug'=>$postOfId13[3]->slug])}}"
                                               class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$postOfId13[3]->image_path}}" alt="IMG">
                                            </a>
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$postOfId13[3]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$postOfId13[3]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId13[3]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                            {{$postOfId13[3]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
                                                            {{$postOfId13[3]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>


                    </div>

                </div>
            </div>

        {{--/////////////////////////////////////////////////////--}}
        <!-- Khoa học -->
            <div class="tab01 p-b-20">
                <div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                    <!-- Brand tab -->
                    <a href="{{route('index.show',['slug'=>$topics26->slug])}}">
                        <h3 class="f1-m-2 cl12 tab01-title">
                            {{$topics26->name}}
                        </h3>
                    </a>
                </div>
                <!-- Tab panes -->
                <div class="tab-content p-t-35">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                <!-- Item post -->
                                <div class="m-b-30">
                                    @if(isset($postOfId26[0]))
                                        <a href="{{route('index.detail',['slug'=>$postOfId26[0]->slug])}}" class="wrap-pic-w hov1 trans-03">
                                            <img src="{{$postOfId26[0]->image_path}}" alt="IMG">
                                        </a>
                                        <div class="p-t-20">
                                            <h5 class="p-b-5">
                                                <a href="{{route('index.detail',['slug'=>$postOfId26[0]->slug])}}"
                                                   class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    {{$postOfId26[0]->title}}
                                                </a>
                                            </h5>

                                            <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId26[0]->slug])}}" class="f1-s-4 cl8 hov-cl10 trans-03">
															{{$postOfId26[0]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$postOfId26[0]->updated_at}}
														</span>
													</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if(isset($postOfId26[1]))
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <!-- Item post -->
                                    @if(isset($postOfId26[1]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$postOfId26[1]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$postOfId26[1]->image_path}}" alt="IMG">
                                            </a>
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$postOfId26[1]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$postOfId26[1]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId26[1]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
														{{$postOfId26[1]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
																{{$postOfId26[1]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($postOfId26[2]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$postOfId26[2]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$postOfId26[2]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$postOfId26[2]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$postOfId26[2]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId26[2]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
															{{$postOfId26[2]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$postOfId26[2]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($postOfId26[3]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$postOfId26[3]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$postOfId26[3]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$postOfId26[3]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$postOfId26[3]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId26[3]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
															{{$postOfId26[3]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$postOfId26[3]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Travel -->
            <div class="tab01 p-b-20">
                <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                    <a href="{{route('index.show',['slug'=>$topics29->slug])}}">
                        <h3 class="f1-m-2 cl12 tab01-title">
                            {{$topics29->name}}
                        </h3>
                    </a>
                </div>
                <!-- Tab panes -->
                <div class="tab-content p-t-35">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                <!-- Item post -->
                                <div class="m-b-30">
                                    @if(isset($postOfId29[0]))
                                        <a href="{{route('index.detail',['slug'=>$postOfId29[0]->slug])}}" class="wrap-pic-w hov1 trans-03">
                                            <img src="{{$postOfId26[0]->image_path}}" alt="IMG">
                                        </a>
                                        <div class="p-t-20">
                                            <h5 class="p-b-5">
                                                <a href="{{route('index.detail',['slug'=>$postOfId29[0]->slug])}}"
                                                   class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    {{$postOfId29[0]->title}}
                                                </a>
                                            </h5>

                                            <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId29[0]->slug])}}" class="f1-s-4 cl8 hov-cl10 trans-03">
															{{$postOfId29[0]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$postOfId29[0]->updated_at}}
														</span>
													</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if(isset($postOfId29[1]))
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <!-- Item post -->
                                    @if(isset($postOfId29[1]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$postOfId29[1]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$postOfId29[1]->image_path}}" alt="IMG">
                                            </a>
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$postOfId29[1]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$postOfId29[1]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId29[1]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
														{{$postOfId29[1]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
																{{$postOfId29[1]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($postOfId29[2]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$postOfId29[2]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$postOfId29[2]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$postOfId29[2]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$postOfId29[2]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId29[2]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
															{{$postOfId29[2]->toUser->name}}
														</a>

														<spa class="f1-s-3 m-rl-3">
															-
														</spa>

														<span class="f1-s-3">
															{{$postOfId29[2]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($postOfId29[3]))
                                        <div class="flex-wr-sb-s m-b-309">
                                            <a href="{{route('index.detail',['slug'=>$postOfId29[3]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$postOfId29[3]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$postOfId29[3]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$postOfId29[3]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$postOfId29[3]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
															{{$postOfId29[3]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$postOfId29[3]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

