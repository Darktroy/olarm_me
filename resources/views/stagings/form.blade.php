
<div class="form-group {{ $errors->has('staging_id') ? 'has-error' : '' }}">
    <label for="staging_id" class="col-md-2 control-label">Staging</label>
    <div class="col-md-10">
        <select class="form-control" id="staging_id" name="staging_id" required="true">
        	    <option value="" style="display: none;" {{ old('staging_id', optional($staging)->staging_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select staging</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('staging_id', optional($staging)->staging_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('staging_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id" required="true">
        	    <option value="" style="display: none;" {{ old('user_id', optional($staging)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($staging)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('registration') ? 'has-error' : '' }}">
    <label for="registration" class="col-md-2 control-label">Registration</label>
    <div class="col-md-10">
        <input class="form-control" name="registration" type="text" id="registration" value="{{ old('registration', optional($staging)->registration) }}" minlength="1" placeholder="Enter registration here...">
        {!! $errors->first('registration', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('active_account') ? 'has-error' : '' }}">
    <label for="active_account" class="col-md-2 control-label">Active Account</label>
    <div class="col-md-10">
        <input class="form-control" name="active_account" type="number" id="active_account" value="{{ old('active_account', optional($staging)->active_account) }}" placeholder="Enter active account here...">
        {!! $errors->first('active_account', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('creation_own_profile') ? 'has-error' : '' }}">
    <label for="creation_own_profile" class="col-md-2 control-label">Creation Own Profile</label>
    <div class="col-md-10">
        <input class="form-control" name="creation_own_profile" type="text" id="creation_own_profile" value="{{ old('creation_own_profile', optional($staging)->creation_own_profile) }}" minlength="1" placeholder="Enter creation own profile here...">
        {!! $errors->first('creation_own_profile', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('creation_own_card') ? 'has-error' : '' }}">
    <label for="creation_own_card" class="col-md-2 control-label">Creation Own Card</label>
    <div class="col-md-10">
        <input class="form-control" name="creation_own_card" type="text" id="creation_own_card" value="{{ old('creation_own_card', optional($staging)->creation_own_card) }}" minlength="1" placeholder="Enter creation own card here...">
        {!! $errors->first('creation_own_card', '<p class="help-block">:message</p>') !!}
    </div>
</div>

