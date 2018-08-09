
<div class="form-group {{ $errors->has('activationcode') ? 'has-error' : '' }}">
    <label for="activationcode" class="col-md-2 control-label">Activationcode</label>
    <div class="col-md-10">
        <input class="form-control" name="activationcode" type="text" id="activationcode" value="{{ old('activationcode', optional($activationProcess)->activationcode) }}" minlength="1" placeholder="Enter activationcode here...">
        {!! $errors->first('activationcode', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($activationProcess)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($activationProcess)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

