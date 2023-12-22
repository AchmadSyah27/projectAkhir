<div class="panel-body">
    <div class="form-horizontal">
      <div class="row">
        <div class="col-md-8">
          @if(count($errors))
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <div class="form-group">
            <label for="name" class="control-label col-md-3">Name</label>
            <div class="col-md-8">
              {{-- <input type="text" name="name" id="name" class="form-control"> --}}
              {{-- Kalau pakai line dibawah ini, bisa saja namun jika form yang ada banyak akan menjadi tidak efektif ditambah satu persatu di setiap formnya, untuk cara ambil data --}}
              {{-- bisa dilihat pada file edit.blade.php --}}
              {{-- {!! Form::text('name', $contact->name, ['class' => 'form-control']) !!}  --}}
              {!! Form::text('name', null , ['class' => 'form-control']) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="company" class="control-label col-md-3">Company</label>
            <div class="col-md-8">
              {{-- <input type="text" name="company" id="company" class="form-control"> --}}
              {{-- {!! Form::text('company', $contact->company, ['class' => 'form-control']) !!} --}}
              {!! Form::text('company', null, ['class' => 'form-control']) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="control-label col-md-3">Email</label>
            <div class="col-md-8">
              {{-- <input type="text" name="email" id="email" class="form-control"> --}}
              {{-- {!! Form::text('email', $contact->email, ['class' => 'form-control']) !!} --}}
              {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="phone" class="control-label col-md-3">Phone</label>
            <div class="col-md-8">
              {{-- <input type="text" name="phone" id="phone" class="form-control"> --}}
              {{-- {!! Form::text('phone', $contact->phone, ['class' => 'form-control']) !!} --}}
              {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="name" class="control-label col-md-3">Address</label>
            <div class="col-md-8">
              {{-- <textarea name="address" id="address" rows="3" class="form-control"></textarea> --}}
              {{-- {{ Form::textarea('address', $contact->address, ['class' => 'form-control', 'rows' => 3]) }} --}}
              {{ Form::textarea('address', null, ['class' => 'form-control', 'rows' => 3]) }}
            </div>
          </div>
          <div class="form-group">
            <label for="group" class="control-label col-md-3">Group</label>
            <div class="col-md-5">
              {{-- <select name="group" id="group" class="form-control">
                <option value="">Select group</option>
                <option value="1">Family</option>
                <option value="2">Friend</option>
                <option value="3">Other</option>
              </select> --}}
              {{-- {!! Form::select('group_id', App\Models\Group::pluck('name','id'), $contact->group_id, ['class' => 'form-control']) !!} --}}
              {!! Form::select('group_id', App\Models\Group::pluck('name','id'), null , ['class' => 'form-control']) !!}
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
              <img src="http://placehold.it/150x150" alt="Photo">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
            <div class="text-center">
              <span class="btn btn-default btn-file"><span class="fileinput-new">Choose Photo</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
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
            {{-- Jika contact id tidak kosong, maka text pada button update sebaliknya jika contact id ada isinya maka text button tampil save--}}
            <button type="submit" class="btn btn-primary">{{ ! empty($contact->id) ? "Update" : "Save"}}</button>
            <a href="#" class="btn btn-default">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>