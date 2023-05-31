<nav class="nav-bar" style="background-color: #085426;">
    <a href="/">
        <img src="./images/logoimage.png" style=" height:100px "  alt="" />
    </a>
    <div class="nav-items">
        <a href="/">الصفحة الرئيسية</a>
        <a href="#">حول</a>
        <a href="request-loan">طلب قرض</a>
        <a href="#">اتصل بنا</a>


    </div>
    <div class="action">
        <a href="#" id="logi-bt" class="header-action-btn" onclick="menuToggle();"> <img src="/images/user.png" width="60" height="50" ></a>
        <div class="header-actions">

            <div class="admin">
                <div class="menu">
                    {{--                    <h3>--}}
                    {{--                        حساب المستخدم--}}
                    {{--                            اهلا بك--}}
                    {{--                    </h3>--}}
                    <ul  dir="rtl" >
                        @auth
                            <li>
                                <img src="/images/edit.png" >
                                <span class="material-icons icons-size"></span>
                                <a href="/profile">تعديل المعلومات</a>
                            </li>
                            <li>
                                <img src="/images/logout.png"  alt="">
                                <span class="material-icons icons-size"></span>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                        @guest
                            <li>

                                <i class="fa fa-user"></i>
                                <a style="margin: 5px" href="/login">تسجيل الدخول</a>
                            </li>
                            <li>
                                <!-- sign up font -->

                                <i class="fa fa-user"></i>
                                <a style="margin: 5px" href="/register">تسجيل جديد</a>
                            </li>
                        @endguest



                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
