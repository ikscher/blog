<!--
   // var_dump($user);
   // foreach($user as $u){
   // 	  echo $u->user_name;
   // }
   // // echo $user->user_name;
   // // echo $email;
   // echo $count;
-->

<div class="container">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($user->user_name); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php echo e($users->links()); ?>