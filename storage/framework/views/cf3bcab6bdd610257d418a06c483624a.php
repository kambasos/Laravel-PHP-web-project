

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Продукти</h1>
    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary mb-3">Додати новий продукт</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Назва продукта</th>
                <th>Ціна</th>
                <th>Опис продукта</th>
                <th>URL зображенняя</th>
                <th>Дії</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->ProductName); ?></td>
                <td><?php echo e($product->Price); ?></td>
                <td><?php echo e($product->ProductDescription); ?></td>
                <td><img src="<?php echo e(asset('images/' . $product->ImageURL)); ?>" style="width: 100px; height: auto;"></td>
                <td>
                    <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn btn-warning">Редагувати</a>
                    <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Видалити</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($products->links()); ?> <!-- Пагінація -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lr5\resources\views/products/index.blade.php ENDPATH**/ ?>