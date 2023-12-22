<?php $__env->startSection('content'); ?>

<div class="panel panel-default">

    <table class="table">
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
        <td class="middle">
            <div class="media">
            <div class="media-left">
                <a href="#">
                <img class="media-object" src="http://placehold.it/100x100" alt="...">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading"><?php echo e($contact->name); ?></h4>
                <address>
                    <strong><?php echo e($contact->company); ?></strong><br>
                    <?php echo e($contact->email); ?>

                </address>
            </div>
            </div>
        </td>
        <td width="100" class="middle">
            <div>
            <a href="<?php echo e(route("contacts.edit", $contact->id)); ?>" class="btn btn-circle btn-default btn-xs" title="Edit">
                <i class="glyphicon glyphicon-edit"></i>
            </a>
            <a href="contacts.edit" class="btn btn-circle btn-danger btn-xs" title="Edit">
                <i class="glyphicon glyphicon-remove"></i>
            </a>
            </div>
        </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>            
</div>

          <div class="text-center">
            <nav>
             
            <?php echo $contacts->appends( Request::query() )->render(); ?>

            </nav>
          </div>

          
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nusacodes/projectAkhir/projectAkhir/resources/views/contacts/index.blade.php ENDPATH**/ ?>