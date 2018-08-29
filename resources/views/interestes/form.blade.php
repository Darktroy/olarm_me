
<div class="form-group {{ $errors->has('interest_id') ? 'has-error' : '' }}">
    <label for="interest_id" class="col-md-2 control-label">Interest</label>
    <div class="col-md-10">
        <select class="form-control" id="interest_id" name="interest_id" required="true">
        	    <option value="" style="display: none;" {{ old('interest_id', optional($interestes)->interest_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select interest</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('interest_id', optional($interestes)->interest_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('interest_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($interestes)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

