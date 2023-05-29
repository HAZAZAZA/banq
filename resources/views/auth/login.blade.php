<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="css/login/style.css" />
  </head>
  <body>
    
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">

          
              
            <form action="/login" method="POST" class="sign-in-form">
              <div class="heading">
                <h2>تسجيل الدخول</h2>
                <h6>ليس لديك حساب؟</h6>
                <a href="#" class="toggle">إنشاء حساب جديد</a>
              </div>
              {{ csrf_field() }}
           
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="email"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name = "email"
                  />
                  <label>رقم بطاقة الفلاح</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name = "password"
                  />
                  <label>كلمة المرور</label>
                </div>

                <input type="submit"   value='LOGIN' value="تسجيل الدخول" class="sign-btn" />

                 
              </div>
            </form>

            <form action="{{ route('register') }}"  method="post"  class="sign-up-form" >
            @csrf


              <div class="heading">
                <h2>إنشاء حساب</h2>
                <h6>لديك حساب بالفعل؟</h6>
                <a href="#" class="toggle">تسجيل الدخول</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    name="name"
                    required
                  />
                  <label>الاسم و اللقب</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    name="nbcart"
                    required
                  />
                  <label>رقم بطاقة الفلاح</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    name="email"
                    required
                  />
                  <label>الإيميل</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    name="passe"
                    required
                  />
                  <label>كلمة المرور</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password-confirmation"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    name="conpasse"
                    required
                  />
                  <label>تأكيد كلمة المرور</label>
                </div>
                

                <input type="submit" value="إنشاء" class="sign-btn"  name="get"/>

                
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/iwchzfts82dh4dhzaf1f" class="image img-1 show" alt="" />
              
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>قرضك أسهل معنا</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

 

  <!--Javascript file -->

    <script src="js/login/app.js"></script>
  </body>
</html> 