<?php 
use App\Wilaya;
use App\Commune;
$wilayas = [];
$communes = [];

?>

<?php $__env->startSection('content'); ?>
<section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_8f71">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <h2 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1  pb-4"> انشاء حساب
                        جديد</h2>
                </div>
            </section>
            <section class="u-align-center u-clearfix u-section-2 " id="sec-6bea">

                <div class="u-clearfix u-sheet u-sheet-1 form-box mt-5 mb-3 p-3">
                    <div class="u-expanded-width u-tab-links-align-left u-tabs u-tabs-1">
                        <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled "
                            role="tablist">
                            <li class="u-tab-item" role="presentation">
                                <a id="userclick"
                                    class="active u-active-palette-1-base u-button-style u-custom-font u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1"
                                    id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5"
                                    aria-selected="true">مواطن</a>
                            </li>
                            <li class="u-tab-item" role="presentation">
                                <a id="companyclick"
                                    class="u-active-palette-1-base u-button-style u-custom-font u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2"
                                    id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7"
                                    aria-selected="false">شركة او
                                    متعامل اقتصادي</a>
                            </li>
                            <li class="u-tab-item ml-2 mr-2" role="presentation">
                                <a id="assocclick"
                                    class="u-active-palette-1-base u-button-style u-custom-font u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3"
                                    id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917"
                                    aria-selected="false">مجتمع
                                    مدني</a>
                            </li>
                        </ul>
                        <div class="container mt-4">
                            <form class="row " action="<?php echo e(route('user.create')); ?>" method="POST">
                                <?php echo csrf_field(); ?>

                                <div class="col-xl-12 col-lg-12">
                                </div>

                                <input type="hidden" name="usertype" id="usertype" value="1">

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
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

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">البلدية *</label>

                                    <select class="form-control" name="commune" id="commune_select">

                                        <option value=""><?php echo e(__('Please choose...')); ?></option>

                                        <?php $__currentLoopData = $communes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commune): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <option value="<?php echo e($commune->id); ?>" <?php echo e($commune->id == (old('commune_id') ?? ($member->commune_id ?? '')) ? 'selected' : ''); ?>>

                                                <?php echo e($commune->name); ?>


                                            </option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                    <input class="form-control valid" id="commune_select_loading" value="<?php echo e(__('Loading...')); ?>"

                                        readonly style="display: none;"/>

                                    <?php if($errors->has('commune_id')): ?>

                                        <p class="help-block"><?php echo e($errors->first('commune_id')); ?></p>

                                    <?php endif; ?>
                                    

                                </div>

                                <div id="association" class="col-12 row d-none">

                                    <div class="form-group col-12">
                                        <label class="rtl-text">نوع الجمعية *</label>
                                        <select class="form-control" name="type" id="type">
                                            <option value="1">جمعية احياء</option>
                                            <option value="2">ممثل قرية</option>
                                            <option value="3">جمعية وطنية</option>
                                            <option value="4">نقابة</option>
                                        </select>
                                    </div>

                                </div>

                                <div id="company" class=" col-12 row d-none">
                                    <div class="form-group col-12">
                                        <label class="rtl-text">رقم الاحصاء الوطني *</label>
                                        <input type="text" name="nit" id="nit" value="" class="form-control">
                                    </div>
                                </div>

                                <div id="user" class=" col-12 row m-0">


                                    <div class="form-group col-lg-12 col-xl-12 col-sm-12 col-xs-12 col-md-12 p-0 pr-3">
                                        <label class="rtl-text">رقم التعريف الوطني *</label>
                                        <input type="text" name="nia" id="nia" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12"
                                    class=" col-12 row ">
                                    <label class="rtl-text">الاسم *</label>
                                    <input type="text" name="nom" id="nom" value="" class="form-control" required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">اللقب *</label>
                                    <input type="text" name="prenom" id="prenom" value="" class="form-control" required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">تاريخ الميلاد *</label>
                                    <input type="date" name="naissance" id="naissance" value="" class="form-control"
                                        required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">الجنس *</label>
                                    <select class="form-control" name="sexe" id="sexe" required>
                                        <option value="1">ذكر</option>
                                        <option value="2">انثى</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">رقم بطاقة التعريف *</label>
                                    <input type="text" class="form-control" value="" name="identite" id="identite"
                                        required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">تاريخ الصدور *</label>
                                    <input type="date" class="form-control" value="" name="date_emission" id="date_emission"
                                        required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">البريد الاكتروني *</label>
                                    <input type="email" class="form-control" value="" name="email" id="email" required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">رقم الهاتف *</label>
                                    <input type="text" name="telephone" id="telephone" value="" required class="form-control">
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">كلمة المرور *</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>

                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-12">
                                    <label class="rtl-text">تاكيد كلمة المرور *</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        id="password_confirmation" required>
                                </div>

                                <div class="form-group col-12 w-100">
                                    <button type="submit" class="btn btn-success m-auto d-block p-2 pl-5 pr-5">طلب
                                        التسجيل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>


function watchWilayaChanges() {
            $('#wilaya_select').on('change', function (e) {
                e.preventDefault();
                var $communes = $('#commune_select');
                var $communesLoader = $('#commune_select_loading');
                var $iconLoader = $communes.parents('.input-group').find('.loader-spinner');
                var $iconDefault = $communes.parents('.input-group').find('.material-icons');
                $communes.hide().prop('disabled', 'disabled').find('option').not(':first').remove();
                $communesLoader.show();
                $iconDefault.hide();
                $iconLoader.show();
                $.ajax({
                    dataType: "json",
                    method: "GET",
                    url: "/api/static/communes/ " + $(this).val()
                })
                    .done(function (response) {
                        $.each(response, function (key, commune) {
                            $communes.append($('<option>', {value: commune.id}).text(commune.name));
                        });
                        $communes.prop('disabled', '').show();
                        $communesLoader.hide();
                        $iconLoader.hide();
                        $iconDefault.show();
                    });
            });
        }


        $(document).ready(function () {
            watchWilayaChanges();
        });




        var hostadmin = "index.html";
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>






    <script>
        $("#assocclick").click(function () {
            $("#usertype").val(3);
            $("#association").removeClass("d-none");
            $("#company").addClass("d-none");
            $("#user").addClass("d-none");

            $("#nit").prop('required', false);
            $("#type_assoc").prop('required', true);
            $("#nia").prop('required', false);
            // $("#type").prop('required', false);

        });

        $("#userclick").click(function () {
            $("#usertype").val(1);
            $("#user").removeClass("d-none");
            $("#company").addClass("d-none");
            $("#association").addClass("d-none");

            $("#nit").prop('required', false);
            $("#type_assoc").prop('required', false);
            $("#nia").prop('required', true);
            // $("#type").prop('required', true);

        });

        $("#companyclick").click(function () {
            $("#usertype").val(2);
            $("#company").removeClass("d-none");
            $("#association").addClass("d-none");
            $("#user").addClass("d-none");

            $("#nit").prop('required', true);
            $("#type_assoc").prop('required', false);
            $("#nia").prop('required', false);
            // $("#type").prop('required', false);

        });


    </script>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>