<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/HomeStyle.css" />
    <title>BADR Bank</title>
</head>
<body>
<nav class="nav-bar" style="background-color: #085426;">
    <img src="./images/logoimage.png" style=" height:100px "  alt="" />
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
                    <h3>
                        حساب المستخدم
                        <div>
                            اهلا بك
                        </div>
                    </h3>
                    <ul  dir="rtl" >
                        <li>
                            <img src="/images/edit.jpg" >
                            <span class="material-icons icons-size"></span>
                            <a href="/profile">تعديل المعلومات</a>
                        </li>

                        <img src="images/logout.png" >
                        <span class="material-icons icons-size"></span>
                        <a href="">تسجيل الخروج</a>
                        </li>




                    </ul>
                </div>
            </div>

</nav>



<main>
    <article>

        <!--
          - #HERO
        -->

        <div class="bod" dir="rtl">
            <section class="py-2 my-2"  id="oo">
                <div class="contain">
                    <h1 class="mb-5">تعديل المعلومات</h1>
                    <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                        <div class="profile-tab-nav border-right">
                            <div class="p-4">
                                <div class="img-circle text-center mb-3">
                                    <img src="images/ayay.jpg" alt="Image" class="shadow">
                                </div>
                                <h4 class="text-center">Kiran Acharya</h4>
                            </div>
                            <div class="nav flex-column nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                                    <i class="fa fa-home text-center mr-1"></i>
                                    الحساب
                                </a>


                                <a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
                                    <i class="fa fa-tv text-center mr-1"></i>
                                    تطبيقات
                                </a>
                                <a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                                    <i class="fa fa-bell text-center mr-1"></i>
                                    اشعارات
                                </a>
                            </div>
                        </div>
                        <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                <h3 class="mb-4">اعدادات</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label>اسم المستخدم</label>
                                                <input type="text" class="form-control" value="{{$user->name}}" name="name" >
                                            </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>البريد الكتروني</label>
                                            <input type="text" class="form-control" value="{{$user->email}}" name="email">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label>الاسم </label>
                                                <input type="text" class="form-control" value="{{$user->first_name}}" name="first_name" >
                                            </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>اللقب</label>
                                            <input type="text" class="form-control" value="{{$user->last_name}}" name="last_name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label>العنوان </label>
                                                <input type="text" class="form-control" value="{{$user->address}}" name="address" >
                                            </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>البلدية</label>
                                            <input type="text" class="form-control" value="{{$user->city}}" name="city">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الولاية</label>
                                            <input type="text" class="form-control" value="{{$user->state}}" name="state">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>كلمة السر</label>
                                            <input type="password" class="form-control"  name="password">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>تاكيد كلمة السر</label>
                                            <input type="password" class="form-control"   name="cofirm-password" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Bio</label>
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="btno">
                                    <div  class="op">
                                        <button class="btn btn-primary" name="submitt" >تعديل</button>

                                    </div>
                                </div>
                            </div>
                            </form>

                            <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                                <h3 class="mb-4">تطبيقات</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="app-check">
                                                <label class="form-check-label" for="app-check">
                                                    تقييم
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                                                <label class="form-check-label" for="defaultCheck2">
                                                    تقييم الخاص بنا
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                                <h3 class="mb-4">الاشعارات</h3>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="notification1">
                                        <label class="form-check-label" for="notification1">
                                            هنا الخاص بالاشعارات الخاصة بالتطبيق
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="notification2" >
                                        <label class="form-check-label" for="notification2">
                                            اضافة الالكترونية
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="notification3" >
                                        <label class="form-check-label" for="notification3">
                                            انتظر الان الاشعار
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>













        <footer class="footer">
            <div class="footer-container">
                <div class="social-container">
                    <img src="./images/icon-facebook.svg" alt="" />
                    <img src="./images/icon-instagram.svg" alt="" />
                    <img src="./images/icon-twitter.svg" alt="" />
                    <img src="./images/icon-pinterest.svg" alt="" />
                </div>
                <div class="menu">
                    <a href="#">حول البنك</a>
                    <a href="#">اتصل بنا</a>
                    <a href="#">Blog</a>
                </div>
                <div class="menu">
                    <a href="#">Carriers</a>
                    <a href="#">Support</a>
                    <a href="#">سياسة الخصوصية</a>
                </div>
                <button>اطلب قرضك الان</button>
            </div>
        </footer>
        </script>



        <script src="/css/app.js"></script>

{{--        <script src="css/bootstrap.min.js"></script>--}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script src="./js/index.js"></script>

        <script src = "/js/script.js"></script>
        <script>
            function menuToggle(){
                const toggleMenu = document.querySelector('.menu');
                toggleMenu.classList.toggle('active')
            }
        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script src="JS/swiper-bundle.min.js"></script>
        <script>

            const productContainers = [...document.querySelectorAll('.has-scrollbar')];
            const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
            const preBtn = [...document.querySelectorAll('.pre-btn')];

            productContainers.forEach((item, i) => {
                let containerDimensions = item.getBoundingClientRect();
                let containerWidth = containerDimensions.width;

                nxtBtn[i].addEventListener('click', () => {
                    item.scrollLeft += containerWidth;
                })

                preBtn[i].addEventListener('click', () => {
                    item.scrollLeft -= containerWidth;
                })
            })












        </script>

</body>
</html>


