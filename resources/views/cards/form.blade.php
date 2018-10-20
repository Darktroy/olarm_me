
<div class="form-group {{ $errors->has('card_id') ? 'has-error' : '' }}">
    <label for="card_id" class="col-md-2 control-label">Card</label>
    <div class="col-md-10">
        <select class="form-control" id="card_id" name="card_id" required="true">
        	    <option value="" style="display: none;" {{ old('card_id', optional($cards)->card_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select card</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('card_id', optional($cards)->card_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('card_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($cards)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($cards)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('privacy') ? 'has-error' : '' }}">
    <label for="privacy" class="col-md-2 control-label">Privacy</label>
    <div class="col-md-10">
        <input class="form-control" name="privacy" type="text" id="privacy" value="{{ old('privacy', optional($cards)->privacy) }}" minlength="1" placeholder="Enter privacy here...">
        {!! $errors->first('privacy', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
    <label for="company_name" class="col-md-2 control-label">Company Name</label>
    <div class="col-md-10">
        <input class="form-control" name="company_name" type="text" id="company_name" value="{{ old('company_name', optional($cards)->company_name) }}" minlength="1" placeholder="Enter company name here...">
        {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
    <label for="position" class="col-md-2 control-label">Position</label>
    <div class="col-md-10">
        <input class="form-control" name="position" type="text" id="position" value="{{ old('position', optional($cards)->position) }}" minlength="1" placeholder="Enter position here...">
        {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('cell_phone_number') ? 'has-error' : '' }}">
    <label for="cell_phone_number" class="col-md-2 control-label">Cell Phone Number</label>
    <div class="col-md-10">
        <input class="form-control" name="cell_phone_number" type="number" id="cell_phone_number" value="{{ old('cell_phone_number', optional($cards)->cell_phone_number) }}" placeholder="Enter cell phone number here...">
        {!! $errors->first('cell_phone_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('landline') ? 'has-error' : '' }}">
    <label for="landline" class="col-md-2 control-label">Landline</label>
    <div class="col-md-10">
        <input class="form-control" name="landline" type="text" id="landline" value="{{ old('landline', optional($cards)->landline) }}" minlength="1" placeholder="Enter landline here...">
        {!! $errors->first('landline', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fax') ? 'has-error' : '' }}">
    <label for="fax" class="col-md-2 control-label">Fax</label>
    <div class="col-md-10">
        <input class="form-control" name="fax" type="text" id="fax" value="{{ old('fax', optional($cards)->fax) }}" minlength="1" placeholder="Enter fax here...">
        {!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('website_url') ? 'has-error' : '' }}">
    <label for="website_url" class="col-md-2 control-label">Website Url</label>
    <div class="col-md-10">
        <input class="form-control" name="website_url" type="text" id="website_url" value="{{ old('website_url', optional($cards)->website_url) }}" minlength="1" placeholder="Enter website url here...">
        {!! $errors->first('website_url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('about_me') ? 'has-error' : '' }}">
    <label for="about_me" class="col-md-2 control-label">About Me</label>
    <div class="col-md-10">
        <input class="form-control" name="about_me" type="text" id="about_me" value="{{ old('about_me', optional($cards)->about_me) }}" minlength="1" placeholder="Enter about me here...">
        {!! $errors->first('about_me', '<p class="help-block">:message</p>') !!}
    </div>
</div>

