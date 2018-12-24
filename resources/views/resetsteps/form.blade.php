
<div class="form-group {{ $errors->has('resetsteps_id') ? 'has-error' : '' }}">
    <label for="resetsteps_id" class="col-md-2 control-label">Resetsteps</label>
    <div class="col-md-10">
        <select class="form-control" id="resetsteps_id" name="resetsteps_id" required="true">
        	    <option value="" style="display: none;" {{ old('resetsteps_id', optional($resetsteps)->resetsteps_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select resetsteps</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('resetsteps_id', optional($resetsteps)->resetsteps_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('resetsteps_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="email" id="email" value="{{ old('email', optional($resetsteps)->email) }}" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('confirmation_code') ? 'has-error' : '' }}">
    <label for="confirmation_code" class="col-md-2 control-label">Confirmation Code</label>
    <div class="col-md-10">
        <input class="form-control" name="confirmation_code" type="text" id="confirmation_code" value="{{ old('confirmation_code', optional($resetsteps)->confirmation_code) }}" minlength="1" placeholder="Enter confirmation code here...">
        {!! $errors->first('confirmation_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('confirmation_link') ? 'has-error' : '' }}">
    <label for="confirmation_link" class="col-md-2 control-label">Confirmation Link</label>
    <div class="col-md-10">
        <input class="form-control" name="confirmation_link" type="text" id="confirmation_link" value="{{ old('confirmation_link', optional($resetsteps)->confirmation_link) }}" minlength="1" placeholder="Enter confirmation link here...">
        {!! $errors->first('confirmation_link', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('temp_pass') ? 'has-error' : '' }}">
    <label for="temp_pass" class="col-md-2 control-label">Temp Pass</label>
    <div class="col-md-10">
        <input class="form-control" name="temp_pass" type="text" id="temp_pass" value="{{ old('temp_pass', optional($resetsteps)->temp_pass) }}" minlength="1" placeholder="Enter temp pass here...">
        {!! $errors->first('temp_pass', '<p class="help-block">:message</p>') !!}
    </div>
</div>

