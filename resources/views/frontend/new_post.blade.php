<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 p-b-20">
            <div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Tin tức mới nhất
                </h3>
            </div>
            <div class="row p-t-35" id="ok">
                @foreach($postNews as $postNew)
                    @if($postNew->status ==1)
                        <div class="col-sm-6 p-r-25 p-r-15-sr991">
                            <!-- Item latest -->
                            <div class="m-b-45">
                                <a href="{{route('index.detail',['slug'=>$postNew->slug])}}"
                                   class="wrap-pic-w hov1 trans-03">
                                    <img style="width: 320px; height: 180px; object-fit: cover"
                                         src="{{$postNew->image_path}}">
                                </a>
                                <div class="p-t-16">
                                    <h5 class="p-b-5">
                                        <a href="{{route('index.detail',['slug'=>$postNew->slug])}}"
                                           class="f1-m-3 cl2 hov-cl10 trans-03">
                                            {{$postNew->title}}
                                        </a>
                                    </h5>
                                    <span class="cl8">
										<a href="{{route('index.detail',['slug'=>$postNew->slug])}}"
                                           class="f1-s-4 cl8 hov-cl10 trans-03">
                                            {{$postNew->toUser->name}}
                                        </a>
										<span class="f1-s-3 m-rl-3">
-
										</span>
										<span class="f1-s-3">
                                            {{$postNew->updated_at}}
                                        </span>
									</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="clearfix">
                {{$postNews->links()}}
            </div>
        </div>
        {{--/////////////////////////////////////////////////////////--}}
        <div class="col-md-10 col-lg-4">
            <div class="p-l-10 p-rl-0-sr991 p-b-20">
                <!-- Video -->
                <div class="p-b-55">
                    <div class="how2 how2-cl4 flex-s-c m-b-35">
                        <h3 class="f1-m-2 cl3 tab01-title">
                         Video
                        </h3>
                    </div>
                            <img class="max-w-full" src="/images/dmx.gif" alt="IMG">
                    </div>
                </div>            <div class="p-l-10 p-rl-0-sr991 p-b-20">
                <!-- Video -->
                <div class="p-b-55">

                            <img class="max-w-full" src="/images/oto.gif" alt="IMG">
                    </div>
                </div>
                <!-- Subscribe -->
            </div>
        </div>
    </div>

