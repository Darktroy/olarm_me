
<div class="form-group {{ $errors->has('emailSignature_id') ? 'has-error' : '' }}">
    <label for="emailSignature_id" class="col-md-2 control-label">Email Signature</label>
    <div class="col-md-10">
        <select class="form-control" id="emailSignature_id" name="emailSignature_id" required="true">
        	    <option value="" style="display: none;" {{ old('emailSignature_id', optional($emailSignature)->emailSignature_id ?: '') == '' ? 'selected' : '' }} disabled selected>Enter email signature here...</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('emailSignature_id', optional($emailSignature)->emailSignature_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('emailSignature_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($emailSignature)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($emailSignature)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('imageName') ? 'has-error' : '' }}">
    <label for="imageName" class="col-md-2 control-label">Image Name</label>
    <div class="col-md-10">
        <input class="form-control" name="imageName" type="number" id="imageName" value="{{ old('imageName', optional($emailSignature)->imageName) }}" placeholder="Enter image name here...">
        {!! $errors->first('imageName', '<p class="help-block">:message</p>') !!}
    </div>
</div>

