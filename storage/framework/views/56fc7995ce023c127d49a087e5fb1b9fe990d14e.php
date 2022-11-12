<?php 
use App\Wilaya;
use App\Commune;
$wilayas = [];
$communes = [];

?>


<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('cirm/assets/css/Login.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="u-align-center u-clearfix u-image u-section-1" id="sec-0da9" data-image-width="6260" data-image-height="4062">
    <div class="u-clearfix u-sheet u-sheet-1">
      <img class="u-image u-image-contain u-image-default u-image-1" src="<?php echo e(asset('cirm/assets/images/republic-stamp1.png')); ?>" alt="" data-image-width="700" data-image-height="655">
      <h1 class="u-custom-font u-text u-text-1">تسجيل&nbsp; الدخول</h1>
      <div class="u-form u-form-1">
        <form  action="<?php echo e(route('login')); ?>" method="POST"  style="padding: 10px" >
            <?php echo csrf_field(); ?>
            <div class="col-xl-12 col-lg-12">
                            </div>

            <div class="form-group col-12">
                <label class="rtl-text">البريد الاكتروني *</label>
               <input type="email" name="email" class="form-control" value="" required>
            </div>

            <div class="form-group col-12">
                <label class="rtl-text"> كلمة المرور *</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group col-12 w-100">
                <button type="submit" class="btn btn-dark  w-100  p-3 pl-5 pr-5 " style="font-size: 20px"> <b>ادخل</b></button>
            </div>
            <a href="forgot.html" class="u-active-none u-border-3 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-custom-font u-hover-none u-none u-radius-0 u-text-hover-palette-4-base u-top-left-radius-0 u-top-right-radius-0 u-btn-2"> هل نسيت كلمة السر ؟</a>

        </form>
    </div>
    </div>
  </section>

       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>