
<div class="form-group {{ $errors->has('messag_record_id') ? 'has-error' : '' }}">
    <label for="messag_record_id" class="col-md-2 control-label">Messag Record</label>
    <div class="col-md-10">
        <select class="form-control" id="messag_record_id" name="messag_record_id" required="true">
        	    <option value="" style="display: none;" {{ old('messag_record_id', optional($messagRecord)->messag_record_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select messag record</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('messag_record_id', optional($messagRecord)->messag_record_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('messag_record_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="email" id="email" value="{{ old('email', optional($messagRecord)->email) }}" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title_of_message') ? 'has-error' : '' }}">
    <label for="title_of_message" class="col-md-2 control-label">Title Of Message</label>
    <div class="col-md-10">
        <input class="form-control" name="title_of_message" type="number" id="title_of_message" value="{{ old('title_of_message', optional($messagRecord)->title_of_message) }}" placeholder="Enter title of message here...">
        {!! $errors->first('title_of_message', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    <label for="message" class="col-md-2 control-label">Message</label>
    <div class="col-md-10">
        <input class="form-control" name="message" type="number" id="message" value="{{ old('message', optional($messagRecord)->message) }}" placeholder="Enter message here...">
        {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($messagRecord)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($messagRecord)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

