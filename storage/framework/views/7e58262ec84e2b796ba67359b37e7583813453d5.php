    <?php $__env->startSection('styles'); ?>
        <link rel="stylesheet" href="https://afrahkoum.com/cirm/assets/css/Page-1.css">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>

                
<section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_8f71">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1 pb-4"> تقديم شكوى </h2>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-2" id="sec-6bea">

    <div class="u-clearfix u-sheet u-sheet-1">

        <div class="container mt-4">
            <form class="row form-box mt-3 mb-3 p-3" action="<?php echo e(route('reclamation.create')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="g-recaptcha" data-sitekey="your_site_key"></div>

                <div class="col-xl-12 col-lg-12">
                                    </div>

                <input type="hidden" name="usertype" id="usertype" value="1">

                <div class="form-group col-lg-4 col-xl-4 col-sm-12 col-xs-12 col-md-12">
                    <label class="rtl-text">الولاية *</label>
                        <select class="form-control" name="wilaya" id="wilaya" required>
                            <option value=""> إختر الولاية</option>
                            <option value="1" >1 - أدرار</option>
                            <option value="2" >2 -  الشلف</option>
                            <option value="3" >3 - الأغواط</option>
                            <option value="4" >4 - أم البواقي</option>
                            <option value="5" >5 - باتنة</option>
                            <option value="6" >6 -  بجاية</option>
                            <option value="7" >7 - بسكرة</option>
                            <option value="8" >8 - بشار</option>
                            <option value="9" >9 - البليدة</option>
                            <option value="10" >10 - البويرة</option>
                            <option value="11" >11 - تمنراست</option>
                            <option value="12" >12 - تبسة</option>
                            <option value="13" >13 - تلمسان</option>
                            <option value="14" >14 - تيارت</option>
                            <option value="15" >15 - تيزي وزو</option>
                            <option value="16" >16 - الجزائر</option>
                            <option value="17" >17 - الجلفة</option>
                            <option value="18" >18 - جيجل</option>
                            <option value="19" >19 - سطيف</option>
                            <option value="20" >20 - سعيدة</option>
                            <option value="21" >21 - سكيكدة</option>
                            <option value="22" >22 - سيدي بلعباس</option>
                            <option value="23" >23 - عنابة</option>
                            <option value="24" >24 - قالمة</option>
                            <option value="25" >25 - قسنطينة</option>
                            <option value="26" >26 - المدية</option>
                            <option value="27" >27 - مستغانم</option>
                            <option value="28" >28 - المسيلة</option>
                            <option value="29" >29 - معسكر</option>
                            <option value="30" >30 - ورقلة</option>
                            <option value="31" >31 - وهران</option>
                            <option value="32" >32 - البيض</option>
                            <option value="33" >33 - إليزي</option>
                            <option value="34" >34 - برج بوعريريج</option>
                            <option value="35" >35 - بومرداس</option>
                            <option value="36" >36 - الطارف</option>
                            <option value="37" >37 - تندوف</option>
                            <option value="38" >38 - تيسمسيلت</option>
                            <option value="39" >39 - الوادي</option>
                            <option value="40" >40 - خنشلة</option>
                            <option value="41" >41 - سوق أهراس</option>
                            <option value="42" >42 - تيبازة</option>
                            <option value="43" >43 - ميلة</option>
                            <option value="44" >44 - عين الدفلة</option>
                            <option value="45" >45 - النعامة</option>
                            <option value="46" >46 - عين تيموشنت</option>
                            <option value="47" >47 - غرداية</option>
                            <option value="48" >48 - غليزان</option>
                            <option value="49" >49 - تيميمون</option>
                            <option value="50" >50 - برج باجي مختار</option>
                            <option value="51" >51 - أولاد جلال</option>
                            <option value="52" >52 - بني عباس</option>
                            <option value="53" >53 - عين صالح</option>
                            <option value="54" >54 - عين قزام</option>
                            <option value="55" >55 - تقرت</option>
                            <option value="56" >56 - جانت</option>
                            <option value="57" >57 - المغير</option>
                            <option value="58" >58 - المنيعة</option>
                        </select>
                  </div>

                  <div class="form-group col-lg-4 col-xl-4 col-sm-12 col-xs-12 col-md-12">
                    <label class="rtl-text">الدائرة *</label>
                    <select class="form-control" disabled name="daira" id="daira" required>
                       <option value=""> إختر الدائرة</option>
                    </select>
                  </div>

                  <div class="form-group col-lg-4 col-xl-4 col-sm-12 col-xs-12 col-md-12">
                    <label class="rtl-text">البلدية *</label>
                    <select class="form-control" name="commune" disabled id="commune" required>
                        <option value=""> إختر البلدية</option>
                    </select>
                  </div>

                  <div class="form-group col-12">
                    <label class="rtl-text">نوع العريضة *</label>
                    <select class="form-control" name="type"  id="type" >
                        <option value="1" >يتعلق بغبن نتيجة خلل في تسيير مرفق عمومي </option>
                        <option value="2" >العرائض المتعلقة بالخدمة العمومية</option>
                    </select>
                </div>

                  <div id="type1" class="col-12 row ">

                    <div class="form-group col-12">
                        <label class="rtl-text">القطاع أو الجهة المعنية بالعريضة *</label>
                        <select class="form-control" name="section"  id="section" >
                            <option value=""> إختر القطاع</option>
                                                            <option value="1" >الوزارة الأولى</option>
                                                            <option value="2" >وزارة الداخلية
والجماعات المحلية والتهيئة العمرانية</option>
                                                    </select>
                    </div>

                    <div class="form-group col-12">
                        <label class="rtl-text">الهيئة المتظلم منها*</label>
                        <select class="form-control" name="interet"  id="interet" disabled>
                        </select>
                    </div>

                    <div class="form-group col-12">
                        <label class="rtl-text">موضوع الشكوى *</label>
                        <select class="form-control" name="subject"  id="subject" disabled>
                        </select>
                    </div>

                  </div>

                  <div id="type2"  class=" col-12 row d-none">
                    <div class="form-group col-12">
                        <label class="rtl-text">موضوع الشكوى *</label>
                        <select class="form-control" name="public_subject"  id="public_subject" >
                            <option value=""> إختر الموضوع</option>
                                    <option value="1" >التزود بالمياه الصالحة للشرب</option>
                                    <option value="2" >الربط بشبكة الغاز</option>
                                    <option value="3" >الربط بشبكة الكهرباء</option>
                                    <option value="4" >الربط بقنوات الصرف الصحي</option>
                            </select>
                    </div>
                  </div>

                  <div class="form-group col-12"  class=" col-12 row ">
                    <label class="rtl-text">  عنوان الشكوى *</label>
                   <input type="text"  name="title" minlength="10" name="title"  value=""  class="form-control" required>
                  </div>

                  <div class="form-group col-12">
                    <label class="rtl-text">الملخص *</label>
                    <textarea class="form-control" minlength="50" name="description" id="description" rows="3"></textarea>
                  </div>

                  <div class="form-group col-12">
                    <label class="rtl-text">رابط الفيديو </label>
                   <input type="text" class="form-control" value="" name="video_link" id="video_link"  >
                  </div>

                  <div class="form-group col-12">
                    <label class="rtl-text">ملف مرفق </label>
                   <input type="file" class="form-control" name="file" id="file"  >
                  </div>


                <div class="form-group col-12 w-100">
                    <button type="submit" class="btn btn-success m-auto d-block p-2 pl-5 pr-5">إرسال
                        </button>
                </div>
            </form>
        </div>
    </div>
  </section>

    
  <?php $__env->stopSection(); ?>
    
    <?php $__env->startSection('scripts'); ?>
    <script>
        var hostadmin = "https://afrahkoum.com/cirm";
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    
    <script>

        $("#type").change(function () {

            if ($("#type").val() == 1) {

                $("#type1").removeClass("d-none");
                $("#type2").addClass("d-none");

                $("#public_subject").prop('required', false);
                $("#section").prop('required', true);
                $("#interet").prop('required', true);
                $("#subject").prop('required', true);

            } else {

                $("#type1").addClass("d-none");
                $("#type2").removeClass("d-none");

                $("#public_subject").prop('required', true);
                $("#section").prop('required', false);
                $("#interet").prop('required', false);
                $("#subject").prop('required', false);

            }


        });


        $("#wilaya").change(function (e) {

            var wilaya_id = $("#wilaya").val();

            if (wilaya_id) {

                $.ajax({
                url: hostadmin + "/getdairas/" + wilaya_id,
                type: 'GET',
                success: function(result) {
                    $("#daira").prop('disabled', false);
                    $("#daira").html(result);
                }
                });

            }else{
                $("#daira").prop('disabled', true);
            }


        });

        $("#daira").change(function (e) {

            var daira_id = $("#daira").val();

            if (daira_id) {

                $.ajax({
                url: hostadmin + "/getcommunesdaira/" + daira_id,
                type: 'GET',
                success: function(result) {
                    $("#commune").prop('disabled', false);
                    $("#commune").html(result);
                }
                });

            }else{
                $("#commune").prop('disabled', true);
            }


        });


        $("#section").change(function (e) {

            var section_id = $("#section").val();

            if (section_id) {

                $.ajax({
                url: hostadmin + "/getinterets/" + section_id,
                type: 'GET',
                success: function(result) {
                    $("#interet").prop('disabled', false);
                    $("#interet").html(result);
                }
                });

            }else{
                $("#interet").prop('disabled', true);
            }


        });

        $("#interet").change(function (e) {

            var interet_id = $("#interet").val();

            if (interet_id) {

                $.ajax({
                url: hostadmin + "/getsubjects/" + interet_id,
                type: 'GET',
                success: function(result) {
                    $("#subject").prop('disabled', false);
                    $("#subject").html(result);
                }
                });

            }else{
                $("#subject").prop('disabled', true);
            }


        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>