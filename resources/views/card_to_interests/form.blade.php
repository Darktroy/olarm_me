
<div class="form-group {{ $errors->has('card_to_interest_id') ? 'has-error' : '' }}">
    <label for="card_to_interest_id" class="col-md-2 control-label">Card To Interest</label>
    <div class="col-md-10">
        <select class="form-control" id="card_to_interest_id" name="card_to_interest_id">
        	    <option value="" style="display: none;" {{ old('card_to_interest_id', optional($cardToInterests)->card_to_interest_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select card to interest</option>
        	@foreach ($cardToInterests as $key => $cardToInterest)
			    <option value="{{ $key }}" {{ old('card_to_interest_id', optional($cardToInterests)->card_to_interest_id) == $key ? 'selected' : '' }}>
			    	{{ $cardToInterest }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('card_to_interest_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('interest_id') ? 'has-error' : '' }}">
    <label for="interest_id" class="col-md-2 control-label">Interest</label>
    <div class="col-md-10">
        <select class="form-control" id="interest_id" name="interest_id">
        	    <option value="" style="display: none;" {{ old('interest_id', optional($cardToInterests)->interest_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select interest</option>
        	@foreach ($interests as $key => $interest)
			    <option value="{{ $key }}" {{ old('interest_id', optional($cardToInterests)->interest_id) == $key ? 'selected' : '' }}>
			    	{{ $interest }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('interest_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($cardToInterests)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($cardToInterests)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($cardToInterests)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('private') ? 'has-error' : '' }}">
    <label for="private" class="col-md-2 control-label">Private</label>
    <div class="col-md-10">
        <input class="form-control" name="private" type="text" id="private" value="{{ old('private', optional($cardToInterests)->private) }}" minlength="1" placeholder="Enter private here...">
        {!! $errors->first('private', '<p class="help-block">:message</p>') !!}
    </div>
</div>

