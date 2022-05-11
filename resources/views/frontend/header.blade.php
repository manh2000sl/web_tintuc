@section('menu_top')
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href=""><img src="/images/icons/logo-01.png" alt="IMG-LOGO"></a>
            </div>
            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li class="left-topbar">
                    <a href="#" class="left-topbar-item">
                        Sing up
                    </a>

                    <a href="#" class="left-topbar-item">
                        Log in
                    </a>
                </li>

                <li class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
            </ul>

            <ul class="main-menu-m">

                @foreach($menuTop as $topicTop)
                    <li>
                        <a  href="{{route('index.show',['slug'=>$topicTop->slug])}}">{{$topicTop->name}}</a>
                    </li>
                @endforeach

                <li>
                    <a href="#">Features</a>
                    <ul class="sub-menu-m">
                        <li><a href="category-01.html">Category Page v1</a></li>
                        <li><a href="category-02.html">Category Page v2</a></li>
                        <li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
                        <li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
                        <li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
                        <li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
                        <li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>

                    <span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
                </li>
            </ul>
        </div>

        <!--  -->
        <div class="wrap-logo container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="{{route('index.home')}}"><img src="/images/icons/logo-01.png" alt="LOGO"></a>
            </div>

            <!-- Banner -->
            <div class="banner-header">
                <a href="https://themewagon.com/themes/free-bootstrap-4-html5-news-website-template-magnews2/"><img
                        src="/images/Banner2.gif" alt="IMG"></a>
            </div>
        </div>

        <!--  -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="{{route('index.home')}}">
                        <img src="/images/icons/logo-01.png" alt="LOGO">
                    </a>
                    <ul class="main-menu">
                        <li class="main-menu-active">
                            <a href="{{route('index.home')}}">Home</a>
                        </li>
                        @foreach($menuTop as $topicTop)
                            <li class="main-menu-active">
                                <a href="{{route('index.show',['slug'=>$topicTop->slug])}}">{{$topicTop->name}}</a>
                            </li>
                        @endforeach
                        <li>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <li class="main-menu" >
                                <p>
                                <a class=" btn bg-secondary text-light"
                                   href="#">
                                  {{Auth::user()->name}}
                                </a>
                                </p>
                            <li class="main-menu">
                                <p>
                                    <a class="nav-link btn-danger btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>
                                </p>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            </li>
                        @else
                            <li class="text-primary main-menu-active"><a href="{{ route('login') }}"
                                                           class="ml-4 text-sm text-primary underline ">Đăng nhập</a>
                            </li>

                            @if (Route::has('register'))
                                <li class=" main-menu-active"><a href="{{ route('register') }}"
                                                              class=" ml-4 text-sm text-danger underline ">Đăng kí</a>
                                </li>
                @endif
                @endif
            </div>
            @endif
            </li>
            </ul>
            </nav>
        </div>
    </div>
</header>
@endsection
