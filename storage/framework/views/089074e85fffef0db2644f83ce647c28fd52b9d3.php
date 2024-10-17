<form action="<?php echo e(route('addProduct')); ?>" method="post">
<?php echo csrf_field(); ?>
Product Name: <input type="text" name="name"><br>
Product Type: <input type="text" name="type"><br>
Product Volume: <input type="text" name="volume"><br>
Product Price: <input type="text" name="price"><br>
Product Quantity: <input type="text" name="quantity"><br>
<button> Submit </button>
</form><?php /**PATH D:\UiTM\Jasin\Sem 6\Project\HilaniMushtari Monarchy Inventory System\HilaniMushtari_Monarchy_Inventory_System\resources\views/Supplier/addProduct.blade.php ENDPATH**/ ?>