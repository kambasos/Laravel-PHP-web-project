

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Редагування продукту</h1>
    <form method="POST" action="<?php echo e(route('products.update', $product)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="ProductName" class="form-label">Назва продукта:</label>
            <input type="text" id="ProductName" name="ProductName" class="form-control" value="<?php echo e(old('ProductName', $product->ProductName)); ?>" required>
            <?php $__errorArgs = ['ProductName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="Price" class="form-label">Ціна прдукта:</label>
            <input type="number" id="Price" name="Price" class="form-control" value="<?php echo e(old('Price', $product->Price)); ?>" required>
            <?php $__errorArgs = ['Price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="ProductDescription" class="form-label">Опис продукта:</label>
            <textarea id="ProductDescription" name="ProductDescription" class="form-control"><?php echo e(old('ProductDescription', $product->ProductDescription)); ?></textarea>
            <?php $__errorArgs = ['ProductDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label for="ImageURL" class="form-label">URL зображення продукта:</label>
            <input type="text" id="ImageURL" name="ImageURL" class="form-control" value="<?php echo e(old('ImageURL', $product->ImageURL)); ?>">
            <?php $__errorArgs = ['ImageURL'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lr5\resources\views/products/edit.blade.php ENDPATH**/ ?>