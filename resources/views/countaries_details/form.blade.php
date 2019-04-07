
<div class="form-group {{ $errors->has('countariesDetails_id') ? 'has-error' : '' }}">
    <label for="countariesDetails_id" class="col-md-2 control-label">Countaries Details</label>
    <div class="col-md-10">
        <select class="form-control" id="countariesDetails_id" name="countariesDetails_id" required="true">
        	    <option value="" style="display: none;" {{ old('countariesDetails_id', optional($countariesDetails)->countariesDetails_id ?: '') == '' ? 'selected' : '' }} disabled selected>Enter countaries details here...</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('countariesDetails_id', optional($countariesDetails)->countariesDetails_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('countariesDetails_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('countaryName') ? 'has-error' : '' }}">
    <label for="countaryName" class="col-md-2 control-label">Countary Name</label>
    <div class="col-md-10">
        <input class="form-control" name="countaryName" type="number" id="countaryName" value="{{ old('countaryName', optional($countariesDetails)->countaryName) }}" placeholder="Enter countary name here...">
        {!! $errors->first('countaryName', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('cityName') ? 'has-error' : '' }}">
    <label for="cityName" class="col-md-2 control-label">City Name</label>
    <div class="col-md-10">
        <input class="form-control" name="cityName" type="text" id="cityName" value="{{ old('cityName', optional($countariesDetails)->cityName) }}" minlength="1" placeholder="Enter city name here...">
        {!! $errors->first('cityName', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('district') ? 'has-error' : '' }}">
    <label for="district" class="col-md-2 control-label">District</label>
    <div class="col-md-10">
        <input class="form-control" name="district" type="text" id="district" value="{{ old('district', optional($countariesDetails)->district) }}" minlength="1" placeholder="Enter district here...">
        {!! $errors->first('district', '<p class="help-block">:message</p>') !!}
    </div>
</div>

