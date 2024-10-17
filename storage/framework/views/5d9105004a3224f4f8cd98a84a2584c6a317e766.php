<?php if($products->count() > 0): ?>
        <form action="selectProduct" method="POST"> <!-- Optional: Use the form to submit selected product -->
            <?php echo csrf_field(); ?>
            <label for="product">Choose a product:</label>
            <select name="product" id="product">
                <option value="" disabled selected>Select a product</option>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?> - $<?php echo e($product->price); ?> - Quantity<?php echo e($product->quantity); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <label for="quantity">quantity: </label>
            <input type="text" name="quantity"><br>


        <!-- Display error message for quantity -->
        <?php if($errors->has('quantity')): ?>
            <div style="color: red;">
                <?php echo e($errors->first('quantity')); ?>

            </div>
        <?php endif; ?>
            <button type="submit">Submit</button>
        </form>
    <?php else: ?>
        <p>No products found!</p>
    <?php endif; ?><?php /**PATH D:\UiTM\Jasin\Sem 6\Project\HilaniMushtari Monarchy Inventory System\HilaniMushtari_Monarchy_Inventory_System\resources\views/Staff/Order.blade.php ENDPATH**/ ?>