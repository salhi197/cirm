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
                    <select class="form-control" id="wilaya_select" name="wilaya_id">
                        <option value=""><?php echo e(__('Please choose...')); ?></option>
                        <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($wilaya->id); ?>" <?php echo e($wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''); ?>>
                                <?php echo e($wilaya->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <select class="form-control" name="commune" id="commune_select">
                        <option value=""><?php echo e(__('Please choose...')); ?></option>
                        <?php $__currentLoopData = $communes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commune): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($commune->id); ?>" <?php echo e($commune->id == (old('commune_id') ?? ($member->commune_id ?? '')) ? 'selected' : ''); ?>>
                                <?php echo e($commune->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                    url: "/cirm/api/static/communes/ " + $(this).val()

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