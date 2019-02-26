
<div class="form-group {{ $errors->has('recommendedCards_id') ? 'has-error' : '' }}">
    <label for="recommendedCards_id" class="col-md-2 control-label">Recommended Cards</label>
    <div class="col-md-10">
        <select class="form-control" id="recommendedCards_id" name="recommendedCards_id">
        	    <option value="" style="display: none;" {{ old('recommendedCards_id', optional($recommendedCards)->recommendedCards_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select recommended cards</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('recommendedCards_id', optional($recommendedCards)->recommendedCards_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('recommendedCards_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('card_id') ? 'has-error' : '' }}">
    <label for="card_id" class="col-md-2 control-label">Card</label>
    <div class="col-md-10">
        <select class="form-control" id="card_id" name="card_id">
        	    <option value="" style="display: none;" {{ old('card_id', optional($recommendedCards)->card_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select card</option>
        	@foreach ($cards as $key => $card)
			    <option value="{{ $key }}" {{ old('card_id', optional($recommendedCards)->card_id) == $key ? 'selected' : '' }}>
			    	{{ $card }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('card_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('recommended_by_user_id') ? 'has-error' : '' }}">
    <label for="recommended_by_user_id" class="col-md-2 control-label">Recommended By User</label>
    <div class="col-md-10">
        <select class="form-control" id="recommended_by_user_id" name="recommended_by_user_id">
        	    <option value="" style="display: none;" {{ old('recommended_by_user_id', optional($recommendedCards)->recommended_by_user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select recommended by user</option>
        	@foreach ($recommendedByUsers as $key => $recommendedByUser)
			    <option value="{{ $key }}" {{ old('recommended_by_user_id', optional($recommendedCards)->recommended_by_user_id) == $key ? 'selected' : '' }}>
			    	{{ $recommendedByUser }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('recommended_by_user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('recommended_for_user_id') ? 'has-error' : '' }}">
    <label for="recommended_for_user_id" class="col-md-2 control-label">Recommended For User</label>
    <div class="col-md-10">
        <select class="form-control" id="recommended_for_user_id" name="recommended_for_user_id">
        	    <option value="" style="display: none;" {{ old('recommended_for_user_id', optional($recommendedCards)->recommended_for_user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select recommended for user</option>
        	@foreach ($recommendedForUsers as $key => $recommendedForUser)
			    <option value="{{ $key }}" {{ old('recommended_for_user_id', optional($recommendedCards)->recommended_for_user_id) == $key ? 'selected' : '' }}>
			    	{{ $recommendedForUser }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('recommended_for_user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

