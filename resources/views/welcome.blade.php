<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <button >
          @guest
        <a  href="/login" >تسجيل الدخول</a>
          @endguest
          @auth
                  <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      {{ __('تسجيل الخروج') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              @endauth
      </button>
    </nav>
    <header class="hero-section">
      <div class="hero-text-container">
        <h1
          >بنك الفلاحة و التنمية الريفية<br />
          قرضك أسهل معنا</h1
        >
        <p
          >تقدم بطلب قرض شخصي جديد عن طريق موقعنا<br />
          و استفد من خدماتنا التي تضمن لك الأمان والسرعة والخصوصية<br />قم بمتابعة قرضك اونلين.</p
        >
        <button> اطلب قرضك الان</button>
      </div>
      <div class="hero-img-container">
        <img src="https://www.jeune-independant.net/wp-content/uploads/2020/08/arton23321.jpg" alt="" />
      </div>
    </header>
    <div class="container">
      <section class="why-us">
        <h1>لماذا أختار بنك الفلاحة و التنمية الريفية؟</h1>
        <p
          >تحقيق نشاط مصرفي في إطار امن، سرعة، بساطة وفعالية<br />
        حيث أنه في هذا الإطار، استهدف اﻟﻔﻼﺣﺔ والنشاط الفلاحي لتحسين واقع الفلاحة والريف بالجزائر وخدمة القطاع الوطني</p
        >
      </section>
      <section class="features-section">

        <div class="feature-item">
          <img src="./images/icon-onboarding.svg" alt="" />
          <h1>الانضمام السريع</h1>
          <p>
            افتح دقائق<br />
            عبر الإنترنت<br />
            و اطلب قرضك<br />
            </p>
        </div>

        <div class="feature-item">
          <img src="./images/icon-budgeting.svg" alt="" />
          <h1>الميزانية البسيطة</h1>
          <p
            >تهدف هذه الخدمات<br />
            إلى جعل معاملات العميل البنكية<br />
            ذات سهولة ومرونة <br />
            بواسطة تبسيط التحكم في حسابات القرض عن بعد
          </p>
        </div>


        <div class="feature-item">
          <img src="./images/icon-online.svg" alt="" />
          <h1>خدمات عبر الانترنت</h1>
          <p
            >موقعنا الحديث<br />
            تسمح لك التطبيقات بالاحتفاظ به<br />
            تتبع قرضك أينما<br />
            كان موقعك في العالم
          </p>
        </div>
      </section>
      <section class="blog-section">
        <h1>أحدث المقالات</h1>
        <div class="article-container">
          <div class="article">
            <img src="./images/image-currency.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4
                >Recieve money in any<br />
                currency with no fees.</h4
              >
              <p
                >The world is getting smaller and<br />
                we are becoming more mobile.So,<br />
                why should you be forced to only<br />
                recieve money in a single...</p
              >
            </div>
          </div>
          <div class="article">
            <img src="./images/image-restaurant.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4
                >Recieve money in any<br />
                currency with no fees.</h4
              >
              <p
                >Our simple budgeting feature<br />
                allow to seperate out your<br />
                spending and set realistic limits<br />
                each month.That means you...</p
              >
            </div>
          </div>
          <div class="article">
            <img src="./images/image-plane.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4>Take Your Easybank card<br />whereever you go.</h4>
              <p
                >We want you to enjoy your travels.<br />This is why we don't
                charge any<br />fees on purchase while you're <br />abroad.We'll
                even show you...</p
              >
            </div>
          </div>
          <div class="article">
            <img src="./images/image-confetti.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4>Our invite-only Beta<br />accounts are live now!</h4>
              <p
                >After a lot of hardwork by the<br />
                whole team,we're excited to launch<br />
                our closed beta.It's easy to request <br />an invite through the
                site.</p
              >
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
  </body>
</html>
