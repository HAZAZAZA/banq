<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/css/style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Responsive Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="/request-loan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title">معلوماتك الشخصية</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>الإسم الشخصي</label>
                            <input type="text" name="first_name" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>اسم العائلة</label>
                            <input type="text"  name="last_name" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>تاريخ الميلاد</label>
                            <input type="date"  name="birthday_date" placeholder="Enter your email" required>
                        </div>

{{--                        <div class="input-field">--}}
{{--                            <label>رقم بطاقة الفلاح </label>--}}
{{--                            <input type="text" name="farmer_card_number" placeholder="Enter Farmer card number" required>--}}
{{--                        </div>--}}

                        <div class="input-field">
                            <label>العنوان</label>
                            <input type="text" name="address" placeholder="Enter your ccupation" required>
                        </div>

                        <div class="input-field">
                            <label>رقم الهاتف</label>
                            <input type="text" name="phone" placeholder="Enter your ccupation" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">معلومات المستثمرة</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>عنوان المستثمرة الفلاحية</label>
                            <input type="text" name="project_address" placeholder="Enter ID type" required>
                        </div>

                        <div class="input-field">
                            <label>نوع الإستثمار</label>
                            <select name="investment_type" required>
                                <option disabled selected>نوع الإستثمار</option>
                                <option value="Acquisition of the necessary inputs related to the activity of agricultural investments (seeds, seedlings, fertilizers, pesticides)">إقتناء المدخلات اللازمة المتعلقة بنشاط المستثمرات الفلاحية (البذور ، الشتلات ، الأسمدة ، المبيدات )</option>>
                                <option value="Livestock feed _ irrigation means _ veterinary medicine products">اعلاف المواشي _ وسائل الري _ منتجات الأدوية البيطرية</option>>
                                <option value="Reconstitution of farms (chicks, laying hens)">إعادة تكوين المزارع (كتاكيت ، دجاج البياض ) </option>>
                                <option value="Breeding large animals for fattening (bulls, sheep, camels)">تربية الحيوانات الكبيرة للتسمين (ثيران ،خرفان ، إبل )</option>>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>نوع الملكية</label>
                            <select name="ownership_type" required>
                                <option disabled selected>نوع الملكية</option>
                                <option value="private property">عقد ملك</option>
                                <option value="'concession contrac">عقد امتياز</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>مساحة المستثمرة</label>
                            <input name="surface" type="text" placeholder="Enter issued state" required>
                        </div>




                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">معلومات القرض</span>

                    <div class="fields">
{{--                        <div class="input-field">--}}
{{--                            <label>تاريخ طلب القرض</label>--}}
{{--                            <input type="date" placeholder="Permanent or Temporary" required>--}}
{{--                        </div>--}}

                        <div class="input-field">
                            <label>مبلغ القرض المطلوب</label>
                            <input name="amount" type="text" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>نوع القرض المطلوب</label>
                            <select name="loan_type" required>
                                <option disabled selected>Select gender</option>
                                <option value="ETTAHADI">ETTAHADI</option>
                                <option value="RFIG">RFIG</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>مدة القرض</label>
                            <select name="duration" required>
                                <option disabled selected>اختر مدة القرض</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>المساهمة النقدية للزبون </label>
                            <input type="customer_deposit" placeholder="Enter block number" required>
                        </div>

                        <div class="input-field">
                            <label>دورة تسديد القرض</label>
                            <select name="periodicity" required>
                                <option disabled selected>Select gender</option>
                                <option value="trimester">3 أشهر</option>
                                <option value="semester">6 أشهر</option>
                                <option value="yearly">12 أشهر</option>

                            </select>                          </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">ملف الوثائق المطلوبة:</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input name="file" type="file" placeholder="Enter father name" required>
                        </div>

                    </div>

                    <div class="buttons" id="b">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>

                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
