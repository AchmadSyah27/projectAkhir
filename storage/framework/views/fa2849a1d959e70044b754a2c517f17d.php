<div class="panel-body">
    <div class="form-horizontal">
      <div class="row">
        <div class="col-md-8">
          <?php if(count($errors)): ?>
          <div class="alert alert-danger">
              <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
          <?php endif; ?>
          <div class="form-group">
            <label for="name" class="control-label col-md-3">Name</label>
            <div class="col-md-8">
              
              
              
              
              <?php echo Form::text('name', null , ['class' => 'form-control']); ?>

            </div>
          </div>

          <div class="form-group">
            <label for="company" class="control-label col-md-3">Company</label>
            <div class="col-md-8">
              
              
              <?php echo Form::text('company', null, ['class' => 'form-control']); ?>

            </div>
          </div>

          <div class="form-group">
            <label for="email" class="control-label col-md-3">Email</label>
            <div class="col-md-8">
              
              
              <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

            </div>
          </div>

          <div class="form-group">
            <label for="phone" class="control-label col-md-3">Phone</label>
            <div class="col-md-8">
              
              
              <?php echo Form::text('phone', null, ['class' => 'form-control']); ?>

            </div>
          </div>

          <div class="form-group">
            <label for="name" class="control-label col-md-3">Address</label>
            <div class="col-md-8">
              
              
              <?php echo e(Form::textarea('address', null, ['class' => 'form-control', 'rows' => 3])); ?>

            </div>
          </div>
          <div class="form-group">
            <label for="group" class="control-label col-md-3">Group</label>
            <div class="col-md-5">
              
              
              <?php echo Form::select('group_id', App\Models\Group::pluck('name','id'), null , ['class' => 'form-control']); ?>

            </div>
            <div class="col-md-3">
              <a href="#" id="add-group-btn" class="btn btn-default btn-block">Add Group</a>
            </div>
          </div>
          <div class="form-group" id="add-new-group" style="display: none;">
            <div class="col-md-offset-3 col-md-8">
              <div class="input-group">
                <input type="text" name="new_group" id="new_group" class="form-control">
                <span class="input-group-btn">
                  <a href="#" class="btn btn-default">
                    <i class="glyphicon glyphicon-ok"></i>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                    
                    <?php $photo = ! empty($contact->photo) ? $contact->photo : 'default.jpg' ?>
                    
                    <?php echo Html::image('uploads/' . $photo, "Choose photo", ['width' => 150, 'height' => 150]); ?>

            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
            <div class="text-center">
              <span class="btn btn-default btn-file"><span class="fileinput-new">Choose Photo</span><span class="fileinput-exists" method="POST" enctype="multipart/form-data">Change</span><?php echo Form::file('photo'); ?></span>
              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-footer">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-offset-3 col-md-6">
            
            <button type="submit" class="btn btn-primary"><?php echo e(! empty($contact->id) ? "Update" : "Save"); ?></button>
            <a href="#" class="btn btn-default">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/nusacodes/projectAkhir/projectAkhir/resources/views/contacts/form.blade.php ENDPATH**/ ?>