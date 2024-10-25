<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header bg-primary text-white">
                    <h1>Вітаємо на головній сторінці таблиці продуктів</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Ви можете розпочати переглад та редагування таблиці, увійшовши або зареєструвавшись до сайту.</p>
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-success m-2">Увійти</a>
                    <a href="<?php echo e(route('register')); ?>" class="btn btn-secondary m-2">Зареєструватися</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lr5\resources\views/home.blade.php ENDPATH**/ ?>