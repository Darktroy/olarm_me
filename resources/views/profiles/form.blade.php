
<div class="form-group {{ $errors->has('profile_id') ? 'has-error' : '' }}">
    <label for="profile_id" class="col-md-2 control-label">Profile</label>
    <div class="col-md-10">
        <select class="form-control" id="profile_id" name="profile_id">
        	    <option value="" style="display: none;" {{ old('profile_id', optional($profile)->profile_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select profile</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('profile_id', optional($profile)->profile_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('profile_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($profile)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($profile)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Image</label>
    <div class="col-md-10">
        <input class="form-control" name="image" type="number" id="image" value="{{ old('image', optional($profile)->image) }}" placeholder="Enter image here...">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
    <label for="gender" class="col-md-2 control-label">Gender</label>
    <div class="col-md-10">
        <input class="form-control" name="gender" type="text" id="gender" value="{{ old('gender', optional($profile)->gender) }}" minlength="1" placeholder="Enter gender here...">
        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
    <label for="country" class="col-md-2 control-label">Country</label>
    <div class="col-md-10">
        <input class="form-control" name="country" type="number" id="country" value="{{ old('country', optional($profile)->country) }}" placeholder="Enter country here...">
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
    <label for="city" class="col-md-2 control-label">City</label>
    <div class="col-md-10">
        <input class="form-control" name="city" type="text" id="city" value="{{ old('city', optional($profile)->city) }}" minlength="1" placeholder="Enter city here...">
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('district') ? 'has-error' : '' }}">
    <label for="district" class="col-md-2 control-label">District</label>
    <div class="col-md-10">
        <input class="form-control" name="district" type="text" id="district" value="{{ old('district', optional($profile)->district) }}" minlength="1" placeholder="Enter district here...">
        {!! $errors->first('district', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('field') ? 'has-error' : '' }}">
    <label for="field" class="col-md-2 control-label">Field</label>
    <div class="col-md-10">
        <input class="form-control" name="field" type="text" id="field" value="{{ old('field', optional($profile)->field) }}" minlength="1" placeholder="Enter field here...">
        {!! $errors->first('field', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('industry') ? 'has-error' : '' }}">
    <label for="industry" class="col-md-2 control-label">Industry</label>
    <div class="col-md-10">
        <input class="form-control" name="industry" type="text" id="industry" value="{{ old('industry', optional($profile)->industry) }}" minlength="1" placeholder="Enter industry here...">
        {!! $errors->first('industry', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('specialty') ? 'has-error' : '' }}">
    <label for="specialty" class="col-md-2 control-label">Specialty</label>
    <div class="col-md-10">
        <input class="form-control" name="specialty" type="text" id="specialty" value="{{ old('specialty', optional($profile)->specialty) }}" minlength="1" placeholder="Enter specialty here...">
        {!! $errors->first('specialty', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('privacy') ? 'has-error' : '' }}">
    <label for="privacy" class="col-md-2 control-label">Privacy</label>
    <div class="col-md-10">
        <input class="form-control" name="privacy" type="text" id="privacy" value="{{ old('privacy', optional($profile)->privacy) }}" minlength="1" placeholder="Enter privacy here...">
        {!! $errors->first('privacy', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('template_layout_id') ? 'has-error' : '' }}">
    <label for="template_layout_id" class="col-md-2 control-label">Template Layout</label>
    <div class="col-md-10">
        <select class="form-control" id="template_layout_id" name="template_layout_id">
        	    <option value="" style="display: none;" {{ old('template_layout_id', optional($profile)->template_layout_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select template layout</option>
        	@foreach ($templateLayouts as $key => $templateLayout)
			    <option value="{{ $key }}" {{ old('template_layout_id', optional($profile)->template_layout_id) == $key ? 'selected' : '' }}>
			    	{{ $templateLayout }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('template_layout_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

