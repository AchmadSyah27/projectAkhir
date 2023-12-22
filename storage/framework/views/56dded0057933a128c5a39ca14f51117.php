<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
      <strong>Edit Contact</strong>
    </div>       
    <?php echo Form::model ($contact, ['route' => ['contacts.update', $contact->id], 'method' => 'PATCH']); ?>    
    
    <?php echo $__env->make("contacts.form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo Form::close(); ?>

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nusacodes/projectAkhir/projectAkhir/resources/views/contacts/edit.blade.php ENDPATH**/ ?>