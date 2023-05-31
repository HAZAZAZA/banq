<!DOCTYPE html>
<html>
<head>
    <title>فاتورة قرض</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 60px;
        }
        h1 {
            text-align: center;
        }
        /* استايل الفاتورة */
        .invoice {
            border: 1px solid #ccc;
            padding: 50px;
            max-width: 500px;
            margin: 0 auto;
            direction: rtl; /* تحويل الكتابة من اليمين إلى اليسار */
        }
        /* تفاصيل الفاتورة */
        .invoice .invoice-details {
            margin-bottom: 20px;
            direction: rtl; /* استعادة الكتابة من اليسار إلى اليمين داخل هذا العنصر */

        }
        .invoice .invoice-details .span1 {

            margin-bottom: 20px;
            margin-right: 240px;
            direction: ltr; /* استعادة الكتابة من اليسار إلى اليمين داخل هذا العنصر */

        }
        .invoice .invoice-details .span2 {

            margin-bottom: 20px;
            margin-right: 160px;
            direction: ltr; /* استعادة الكتابة من اليسار إلى اليمين داخل هذا العنصر */

        }
        .invoice .invoice-details .span3 {

            margin-bottom: 20px;
            margin-right: 205px;
            direction: ltr; /* استعادة الكتابة من اليسار إلى اليمين داخل هذا العنصر */

        }
        .invoice .invoice-details p {
            margin: 2px 0;
        }
        /* معلومات المستفيد */
        .invoice .borrower-info {
            margin-top:  20px  ;

        }
        .invoice .borrower-info table {
            width: 100%;
            direction: rtl; /* تحويل الكتابة من اليمين إلى اليسار */
        }
        .invoice .borrower-info table th,
        .invoice .borrower-info table td {
            padding: 3px;

            text-align: right; /* ضبط توجيه النص إلى اليمين */
        }
        .table1 {
            width: 100%;
            border-collapse: collapse;
            font-weight: 100;
        }
        .table1 th, .table1 td {
            padding: 8px;
            border: 1px solid #ccc

        }
        .div1{
            margin-top: 180px;
            margin-right: 15%;
        }
        .span4{
            padding-right: 70px;
        }
        .span5{
            padding-right: 220px;
        }
        .div2{
            margin-top: 60px;
            margin-bottom: 100px;
        }

    </style>
</head>
<body>
<div class="invoice">
    <h1>جدول الاهتلاك</h1>
    <div class="invoice-details">
        <span>عميل :01 </span>
        <span class="span1">رقم الملف : {{$loan->id}}</span>
        <br>
        <span> الاسم واللقب :{{$loan->project->user->first_name}} </span>
{{--        <span class="span2">رقم حساب القرض: 506</span>--}}
        <br>
        <span> العنوان :{{$loan->project->user->address}} </span>
        <span class="span3">نوع القرض: {{$loan->type}}</span>

    </div>


    <!-- قائمة الأقساط والتفاصيل الأخرى للقرض -->
    <table class="table1">
        <tr>
            <th> مدة القرض:</th>
            <td>{{$loan->loan_duration}} سنوات</td>
            <td>TAUX T.V.A:</td>
            <td>{{$loan->tva}}%</td>
        </tr>
        <tr>
            <th>مدة تسديد القرض :</th>
            <td>3 سنوات</td>
            <td>التاريخ :</td>
            <td>{{$loan->created_at}}</td>
        </tr>
        <tr>
            <th>التاريخ الاول لاستلام القرض:</th>
            <td>{{$loan->loan_start_date}}</td>
            <td>دورة التسديد :</td>
            <td>{{$loan->periodicity}}</td>
        </tr>
        <tr>
            <th>التاريخ الاول لدفع جزء من القرض :</th>


            <td colspan="3">08/01/2024</td>
        </tr>
    </table>
    <div class="borrower-info">

        <table>
            <tr>
                <th>راس المال المقترض:</th>
                <td> </td>
            </tr>
            <tr>
                <th>راس المال المستخدم:</th>
                <td></td>
            </tr>


        </table>
        <br>
        <br>
        <table class="table1" style="width: 50px;">
            <tr >
                <th>تاريخ التسديد</th>
                <th>اصلي القرض</th>
                <th>اصلي القرض الواجب</th>
                <th>الفائدة</th>
                <th>الضرائب</th>
                <th>الدفعة</th>
                <th>المعدل</th>


            </tr>
            @foreach($amortizations as $amortization)
                <tr>
                    <td>  {{$amortization->date}}</td>
                    <td>  {{$amortization->rest}}</td>
                    <td>  {{$amortization->amount}}</td>
                    <td>  {{$amortization->loan->interest}} </td>
                    <td>  {{$amortization->loan->tva}} %</td>
                    <td>  {{$amortization->total}}</td>
                    <td>  </td>
                </tr>
            @endforeach






        </table>
    </div>
    <div class="div1">
        <p>N.B:سعر الفائدة المتغير،يمكن رؤية الارصية نتيجة لذلك</p>
        <p>N.B:قد يختلف معدل الضريبة، يمكن رؤية الالكترونية وفقا للنتيجة</p>
    </div>
    <div class="div2">
        <span class="span4">توقيع العميل</span>
        <span class="span5">توقيع المدير</span>
    </div>
</div>
<div class="hanane">

    <button   class="button" type="button" style="border: 2px solid #095e2a; width: 100px; ">طباعة</button>
    <button class="button" type="button" style="border: 2px solid #095e2a; width: 100px;" > <ahref="index.html"  >رجوع</a></button>



</div>
</body>
</html>
