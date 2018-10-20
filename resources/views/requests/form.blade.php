
<div class="form-group {{ $errors->has('request_id') ? 'has-error' : '' }}">
    <label for="request_id" class="col-md-2 control-label">Request</label>
    <div class="col-md-10">
        <select class="form-control" id="request_id" name="request_id" required="true">
        	    <option value="" style="display: none;" {{ old('request_id', optional($requests)->request_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select request</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('request_id', optional($requests)->request_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('request_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('from_id') ? 'has-error' : '' }}">
    <label for="from_id" class="col-md-2 control-label">From</label>
    <div class="col-md-10">
        <select class="form-control" id="from_id" name="from_id">
        	    <option value="" style="display: none;" {{ old('from_id', optional($requests)->from_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select from</option>
        	@foreach ($froms as $key => $from)
			    <option value="{{ $key }}" {{ old('from_id', optional($requests)->from_id) == $key ? 'selected' : '' }}>
			    	{{ $from }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('from_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('to_id') ? 'has-error' : '' }}">
    <label for="to_id" class="col-md-2 control-label">To</label>
    <div class="col-md-10">
        <select class="form-control" id="to_id" name="to_id">
        	    <option value="" style="display: none;" {{ old('to_id', optional($requests)->to_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select to</option>
        	@foreach ($tos as $key => $to)
			    <option value="{{ $key }}" {{ old('to_id', optional($requests)->to_id) == $key ? 'selected' : '' }}>
			    	{{ $to }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('to_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

