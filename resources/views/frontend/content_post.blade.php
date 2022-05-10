@section('content_left')
    <div class="col-md-10 col-lg-8">
        <div class="p-b-20">
            <!-- Entertainment -->
            <div class="tab01 p-b-20">

                <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                    <!-- Brand tab -->
                    <a href="{{route('index.show',['slug'=>$topic_khoa_hoc->slug])}}">
                        <h3 class="f1-m-2 cl12 tab01-title">
                            {{$topic_khoa_hoc->name}}
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
                                    @if(isset($post_chinh_tri[0]))
                                        <a href="{{route('index.detail',['slug'=>$post_chinh_tri[0]->slug])}}"
                                           class="wrap-pic-w hov1 trans-03">
                                            <img
                                                style="width: 320px; height: 240px; object-fit: cover"
                                                src="{{$post_chinh_tri[0]->image_path}}">
                                        </a>
                                        <div class="p-t-20">
                                            <h5 class="p-b-5">
                                                <a href=""
                                                   class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    {{$post_chinh_tri[0]->title}}
                                                </a>
                                            </h5>
                                            <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_chinh_tri[0]->slug])}}" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                            {{$post_chinh_tri[0]->toUser->name}}
														</a>
														<span class="f1-s-3 m-rl-3">
															-
														</span>
														<span class="f1-s-3">
                                                             {{$post_chinh_tri[0]->updated_at}}
														    </span>
													</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if(isset($post_chinh_tri[1]))
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <!-- Item post -->
                                    @if(isset($post_chinh_tri[1]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$post_chinh_tri[1]->slug])}}"
                                               class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$post_chinh_tri[1]->image_path}}" alt="IMG">
                                            </a>
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$post_chinh_tri[1]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$post_chinh_tri[1]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_chinh_tri[1]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                            {{$post_chinh_tri[1]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
                                                            {{$post_chinh_tri[1]->updated_at}}

														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($post_chinh_tri[2]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$post_chinh_tri[2]->slug])}}"
                                               class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$post_chinh_tri[2]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$post_chinh_tri[2]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$post_chinh_tri[2]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_chinh_tri[2]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                            {{$post_chinh_tri[2]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
                                                            {{$post_chinh_tri[2]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($post_chinh_tri[3]))
                                        <div class="flex-wr-sb-s m-b-30">

                                            <a href="{{route('index.detail',['slug'=>$post_chinh_tri[3]->slug])}}"
                                               class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$post_chinh_tri[3]->image_path}}" alt="IMG">
                                            </a>
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$post_chinh_tri[3]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$post_chinh_tri[3]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_chinh_tri[3]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                            {{$post_chinh_tri[3]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
                                                            {{$post_chinh_tri[3]->updated_at}}
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
                    <a href="{{route('index.show',['slug'=>$topic_khoa_hoc->slug])}}">
                        <h3 class="f1-m-2 cl12 tab01-title">
                            {{$topic_khoa_hoc->name}}
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
                                    @if(isset($post_khoa_hoc[0]))
                                        <a href="{{route('index.detail',['slug'=>$post_khoa_hoc[0]->slug])}}" class="wrap-pic-w hov1 trans-03">
                                            <img src="{{$post_khoa_hoc[0]->image_path}}" alt="IMG">
                                        </a>
                                        <div class="p-t-20">
                                            <h5 class="p-b-5">
                                                <a href="{{route('index.detail',['slug'=>$post_khoa_hoc[0]->slug])}}"
                                                   class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    {{$post_khoa_hoc[0]->title}}
                                                </a>
                                            </h5>

                                            <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_khoa_hoc[0]->slug])}}" class="f1-s-4 cl8 hov-cl10 trans-03">
															{{$post_khoa_hoc[0]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$post_khoa_hoc[0]->updated_at}}
														</span>
													</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if(isset($post_khoa_hoc[1]))
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <!-- Item post -->
                                    @if(isset($post_khoa_hoc[1]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$post_khoa_hoc[1]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$post_khoa_hoc[1]->image_path}}" alt="IMG">
                                            </a>
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$post_khoa_hoc[1]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$post_khoa_hoc[1]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_khoa_hoc[1]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
														{{$post_khoa_hoc[1]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
																{{$post_khoa_hoc[1]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($post_khoa_hoc[2]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$post_khoa_hoc[2]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$post_khoa_hoc[2]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$post_khoa_hoc[2]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$post_khoa_hoc[2]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_khoa_hoc[2]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
															{{$post_khoa_hoc[2]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$post_khoa_hoc[2]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($post_khoa_hoc[3]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$post_khoa_hoc[3]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$post_khoa_hoc[3]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$post_khoa_hoc[3]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$post_khoa_hoc[3]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_khoa_hoc[3]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
															{{$post_khoa_hoc[3]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$post_khoa_hoc[3]->updated_at}}
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
                    <a href="{{route('index.show',['slug'=>$topic_khoa_hoc->slug])}}">
                        <h3 class="f1-m-2 cl12 tab01-title">
                            {{$topic_khoa_hoc->name}}
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
                                    @if(isset($post_doi_song[0]))
                                        <a href="{{route('index.detail',['slug'=>$post_doi_song[0]->slug])}}" class="wrap-pic-w hov1 trans-03">
                                            <img src="{{$post_khoa_hoc[0]->image_path}}" alt="IMG">
                                        </a>
                                        <div class="p-t-20">
                                            <h5 class="p-b-5">
                                                <a href="{{route('index.detail',['slug'=>$post_doi_song[0]->slug])}}"
                                                   class="f1-m-3 cl2 hov-cl10 trans-03">
                                                    {{$post_doi_song[0]->title}}
                                                </a>
                                            </h5>

                                            <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_doi_song[0]->slug])}}" class="f1-s-4 cl8 hov-cl10 trans-03">
															{{$post_doi_song[0]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$post_doi_song[0]->updated_at}}
														</span>
													</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if(isset($post_doi_song[1]))
                                <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                    <!-- Item post -->
                                    @if(isset($post_doi_song[1]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$post_doi_song[1]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$post_doi_song[1]->image_path}}" alt="IMG">
                                            </a>
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$post_doi_song[1]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$post_doi_song[1]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_doi_song[1]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
														{{$post_doi_song[1]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
																{{$post_doi_song[1]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($post_doi_song[2]))
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{route('index.detail',['slug'=>$post_doi_song[2]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$post_doi_song[2]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$post_doi_song[2]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$post_doi_song[2]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_doi_song[2]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
															{{$post_doi_song[2]->toUser->name}}
														</a>

														<spa class="f1-s-3 m-rl-3">
															-
														</spa>

														<span class="f1-s-3">
															{{$post_doi_song[2]->updated_at}}
														</span>
													</span>
                                            </div>
                                        </div>
                                    @endif
                                <!-- Item post -->
                                    @if(isset($post_doi_song[3]))
                                        <div class="flex-wr-sb-s m-b-309">
                                            <a href="{{route('index.detail',['slug'=>$post_doi_song[3]->slug])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{$post_doi_song[3]->image_path}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{route('index.detail',['slug'=>$post_doi_song[3]->slug])}}"
                                                       class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$post_doi_song[3]->title}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
														<a href="{{route('index.detail',['slug'=>$post_doi_song[3]->slug])}}" class="f1-s-6 cl8 hov-cl10 trans-03">
															{{$post_doi_song[3]->toUser->name}}
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															{{$post_doi_song[3]->updated_at}}
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

