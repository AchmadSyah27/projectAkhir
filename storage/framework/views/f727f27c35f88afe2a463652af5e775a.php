<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
      <strong>Add Contact</strong>
    </div>       
    <?php echo Form::open (['route' => 'contacts.store']); ?>    
        <?php echo $__env->make("contacts.form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo Form::close(); ?>

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nusacodes/projectAkhir/projectAkhir/resources/views/contacts/create.blade.php ENDPATH**/ ?>