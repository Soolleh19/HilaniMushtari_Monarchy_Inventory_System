<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>

    <?php if($products->count() > 0): ?>  <!-- Use $products (lowercase) -->
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Volume</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Created At</th>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  <!-- Use $products (lowercase) -->
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->type); ?></td>
                    <td><?php echo e($product->volume); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->quantity); ?></td>
                    <td><?php echo e($product->created_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php else: ?>
        <p>No products found!</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH D:\UiTM\Jasin\Sem 6\Project\HilaniMushtari Monarchy Inventory System\HilaniMushtari_Monarchy_Inventory_System\resources\views/Admin/listProduct.blade.php ENDPATH**/ ?>