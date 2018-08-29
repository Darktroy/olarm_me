
<div class="form-group {{ $errors->has('user_card_id') ? 'has-error' : '' }}">
    <label for="user_card_id" class="col-md-2 control-label">User Card</label>
    <div class="col-md-10">
        <select class="form-control" id="user_card_id" name="user_card_id" required="true">
        	    <option value="" style="display: none;" {{ old('user_card_id', optional($userCards)->user_card_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user card</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('user_card_id', optional($userCards)->user_card_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_card_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($userCards)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($userCards)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('card_holder_id') ? 'has-error' : '' }}">
    <label for="card_holder_id" class="col-md-2 control-label">Card Holder</label>
    <div class="col-md-10">
        <select class="form-control" id="card_holder_id" name="card_holder_id">
        	    <option value="" style="display: none;" {{ old('card_holder_id', optional($userCards)->card_holder_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select card holder</option>
        	@foreach ($cardHolders as $key => $cardHolder)
			    <option value="{{ $key }}" {{ old('card_holder_id', optional($userCards)->card_holder_id) == $key ? 'selected' : '' }}>
			    	{{ $cardHolder }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('card_holder_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('card_id') ? 'has-error' : '' }}">
    <label for="card_id" class="col-md-2 control-label">Card</label>
    <div class="col-md-10">
        <select class="form-control" id="card_id" name="card_id">
        	    <option value="" style="display: none;" {{ old('card_id', optional($userCards)->card_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select card</option>
        	@foreach ($cards as $key => $card)
			    <option value="{{ $key }}" {{ old('card_id', optional($userCards)->card_id) == $key ? 'selected' : '' }}>
			    	{{ $card }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('card_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

