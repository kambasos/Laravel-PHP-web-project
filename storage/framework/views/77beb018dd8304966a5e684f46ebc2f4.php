

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Додати новий продукт</h1>
    <form method="POST" action="<?php echo e(route('products.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="ProductName" class="form-label">Назва продукта:</label>
            <input type="text" id="ProductName" name="ProductName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="Price" class="form-label">Ціна продукта:</label>
            <input type="number" id="Price" name="Price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="ProductDescription" class="form-label">Опис продукта:</label>
            <textarea id="ProductDescription" name="ProductDescription" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="ImageURL" class="form-label">URL зображення продукта:</label>
            <input type="text" id="ImageURL" name="ImageURL" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Зберегти</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lr5\resources\views/products/create.blade.php ENDPATH**/ ?>