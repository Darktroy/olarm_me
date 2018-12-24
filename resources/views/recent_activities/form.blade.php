
<div class="form-group {{ $errors->has('recent_activity_id') ? 'has-error' : '' }}">
    <label for="recent_activity_id" class="col-md-2 control-label">Recent Activity</label>
    <div class="col-md-10">
        <select class="form-control" id="recent_activity_id" name="recent_activity_id">
        	    <option value="" style="display: none;" {{ old('recent_activity_id', optional($recentActivity)->recent_activity_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select recent activity</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('recent_activity_id', optional($recentActivity)->recent_activity_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('recent_activity_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($recentActivity)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($recentActivity)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('action_by_user_id') ? 'has-error' : '' }}">
    <label for="action_by_user_id" class="col-md-2 control-label">Action By User</label>
    <div class="col-md-10">
        <select class="form-control" id="action_by_user_id" name="action_by_user_id">
        	    <option value="" style="display: none;" {{ old('action_by_user_id', optional($recentActivity)->action_by_user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select action by user</option>
        	@foreach ($actionByUsers as $key => $actionByUser)
			    <option value="{{ $key }}" {{ old('action_by_user_id', optional($recentActivity)->action_by_user_id) == $key ? 'selected' : '' }}>
			    	{{ $actionByUser }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('action_by_user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000">{{ old('description', optional($recentActivity)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('profile_image_url') ? 'has-error' : '' }}">
    <label for="profile_image_url" class="col-md-2 control-label">Profile Image Url</label>
    <div class="col-md-10">
        <input class="form-control" name="profile_image_url" type="number" id="profile_image_url" value="{{ old('profile_image_url', optional($recentActivity)->profile_image_url) }}" placeholder="Enter profile image url here...">
        {!! $errors->first('profile_image_url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

