<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('cirm/assets/css/statics.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="product-area gray-bg pt-50 pb-50 mt-5 mb-5">
    <div class="container">
        <div class="t-product-wrap">
            <div class="row">

            <?php echo $__env->make('includes.modals.side', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="col-lg-9 order-2 order-lg-1">
                    <div class="col-md-12">
                        <div class="row card">
                        <form action="<?php echo e(route('user.update',['user'=>Auth::user()->id ?? ''])); ?>" method="POST" class=" p-5"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                            <div class="row text-right">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold d-block " for="input-last-name">
                                        <span> اللقب</span>
                                        <strong class="text-danger ">*</strong>
                                    </label>
                                    <input type="text" class="form-control" name="nom" value="<?php echo e(Auth::user()->name); ?>" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold d-block " for="input-last-name">
                                        <span>الإسم </span>
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" name="prenom" value="<?php echo e(Auth::user()->prenom); ?>" required>
                                </div>

                                <div class="form-group col-md-6">

                                    <label class="font-weight-bold d-block " for="input-first-name">
                                        <span>رقم الهاتف</span>
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" name="telephone" value="<?php echo e(Auth::user()->telephone); ?>">
                                </div>

                                <div class="form-group col-md-6">

                                    <label class="font-weight-bold d-block " for="input-first-name">
                                        <span>البريد الاكتروني</span>
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>"
                                        disabled>
                                </div>


                                <div class="form-group d-block m-auto text-center">
                                    <button type="submit" class="btn btn-primary ">حفظ</button>
                                </div>

                        </form>
                    </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>