
<div class="form-group {{ $errors->has('userLocation_id') ? 'has-error' : '' }}">
    <label for="userLocation_id" class="col-md-2 control-label">User Location</label>
    <div class="col-md-10">
        <select class="form-control" id="userLocation_id" name="userLocation_id">
        	    <option value="" style="display: none;" {{ old('userLocation_id', optional($userLocation)->userLocation_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user location</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('userLocation_id', optional($userLocation)->userLocation_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('userLocation_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lat') ? 'has-error' : '' }}">
    <label for="lat" class="col-md-2 control-label">Lat</label>
    <div class="col-md-10">
        <input class="form-control" name="lat" type="text" id="lat" value="{{ old('lat', optional($userLocation)->lat) }}" minlength="1" placeholder="Enter lat here...">
        {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('long') ? 'has-error' : '' }}">
    <label for="long" class="col-md-2 control-label">Long</label>
    <div class="col-md-10">
        <input class="form-control" name="long" type="text" id="long" value="{{ old('long', optional($userLocation)->long) }}" minlength="1" placeholder="Enter long here...">
        {!! $errors->first('long', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
    <label for="country" class="col-md-2 control-label">Country</label>
    <div class="col-md-10">
        <input class="form-control" name="country" type="number" id="country" value="{{ old('country', optional($userLocation)->country) }}" placeholder="Enter country here...">
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
    <label for="state" class="col-md-2 control-label">State</label>
    <div class="col-md-10">
        <input class="form-control" name="state" type="text" id="state" value="{{ old('state', optional($userLocation)->state) }}" minlength="1" placeholder="Enter state here...">
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
    <label for="city" class="col-md-2 control-label">City</label>
    <div class="col-md-10">
        <input class="form-control" name="city" type="text" id="city" value="{{ old('city', optional($userLocation)->city) }}" minlength="1" placeholder="Enter city here...">
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('postal_code') ? 'has-error' : '' }}">
    <label for="postal_code" class="col-md-2 control-label">Postal Code</label>
    <div class="col-md-10">
        <input class="form-control" name="postal_code" type="text" id="postal_code" value="{{ old('postal_code', optional($userLocation)->postal_code) }}" minlength="1" placeholder="Enter postal code here...">
        {!! $errors->first('postal_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

