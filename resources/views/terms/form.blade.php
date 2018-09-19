
<div class="form-group {{ $errors->has('terms_id') ? 'has-error' : '' }}">
    <label for="terms_id" class="col-md-2 control-label">Terms</label>
    <div class="col-md-10">
        <select class="form-control" id="terms_id" name="terms_id">
        	    <option value="" style="display: none;" {{ old('terms_id', optional($terms)->terms_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select terms</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('terms_id', optional($terms)->terms_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('terms_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($terms)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="100000">{{ old('description', optional($terms)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

