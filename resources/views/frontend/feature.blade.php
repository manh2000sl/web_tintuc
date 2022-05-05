@section('feature_post')
    <section class="bg0">
        <div class="container">
            <div class="row m-rl--1">
                @if(isset($posts[0]))
                    <div class="col-md-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url({{$posts[0]->image_path}});">
                            <a href="{{route('index.detail',['slug'=>$posts[0]->slug])}}" class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="{{route('index.show',['slug'=>$posts[0]->toTopic->slug])}}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    {{$posts[0]->toTopic->name}}
                                </a>
                                <h3 class="how1-child2 m-t-14 m-b-10">
                                    <a href="{{route('index.detail',['slug'=>$posts[0]->slug])}}" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                        {{$posts[0]->title}}
                                    </a>
                                </h3>

                                <span class="how1-child2">
                        <span class="f1-s-4 cl11">
                            {{$posts[0]->toUser->name}}
                        </span>

                        <span class="f1-s-3 cl11 m-rl-3">
                            -
                        </span>

                        <span class="f1-s-3 cl11">
                          {{$posts[0]->updated_at}}
                        </span>
                    </span>
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($posts[1]))
                    <div class="col-md-6 p-rl-1">
                        <div class="row m-rl--1">
                            @if(isset($posts[1]))
                                <div class="col-12 p-rl-1 p-b-2">
                                    <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url({{$posts[1]->image_path}});">
                                        <a href="{{route('index.detail',['slug'=>$posts[1]->slug])}}" class="dis-block how1-child1 trans-03"></a>

                                        <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                            <a href="{{route('index.show',['slug'=>$posts[1]->toTopic->slug])}}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                                {{$posts[1]->toTopic->name}}
                                            </a>

                                            <h3 class="how1-child2 m-t-14">
                                                <a href="{{route('index.detail',['slug'=>$posts[1]->slug])}}" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                                    {{$posts[1]->title}}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(isset($posts[2]))
                                <div class="col-sm-6 p-rl-1 p-b-2">
                                    <div class="bg-img1 size-a-5 how1 pos
                                -relative" style="background-image: url( {{$posts[2]->image_path}});">
                                        <a href="{{route('index.detail',['slug'=>$posts[2]->slug])}}" class="dis-block how1-child1 trans-03"></a>

                                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                            <a href="{{route('index.show',['slug'=>$posts[2]->toTopic->slug])}}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                                {{$posts[2]->toTopic->name}}
                                            </a>

                                            <h3 class="how1-child2 m-t-14">
                                                <a href="{{route('index.detail',['slug'=>$posts[2]->slug])}}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                                    {{$posts[2]->title}}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(isset($posts[3]))
                                <div class="col-sm-6 p-rl-1 p-b-2">
                                    <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{$posts[3]->image_path}});">
                                        <a href="{{route('index.detail',['slug'=>$posts[3]->slug])}}" class="dis-block how1-child1 trans-03"></a>

                                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                            <a href="{{route('index.show',['slug'=>$posts[3]->toTopic->slug])}}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                                {{$posts[3]->toTopic->name}}
                                            </a>

                                            <h3 class="how1-child2 m-t-14">
                                                <a href="{{route('index.detail',['slug'=>$posts[3]->slug])}}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                                    {{$posts[3]->title}}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
