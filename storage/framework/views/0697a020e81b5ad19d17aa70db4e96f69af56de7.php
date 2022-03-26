<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Sum</title>
 
</head>
<body>
<h1>Find Sum</h1>
<form action="/sum" method="POST">
    <?php echo csrf_field(); ?>
  
    <b>1st Number:</b>
       <input type="text" name="firstnumber" />
       <?php $__errorArgs = ['firstnumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
    <br>
   
    <b>2nd Number:</b>
   <input type="text" name="secondnumber"/>
   <?php $__errorArgs = ['secondnumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 
   <br>
    <button type="submit">Add</button>
   
</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\Rashmi_11908242\resources\views/addition.blade.php ENDPATH**/ ?>