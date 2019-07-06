
<div class="form-group {{ $errors->has('user_card_note_id') ? 'has-error' : '' }}">
    <label for="user_card_note_id" class="col-md-2 control-label">User Card Note</label>
    <div class="col-md-10">
        <select class="form-control" id="user_card_note_id" name="user_card_note_id" required="true">
        	    <option value="" style="display: none;" {{ old('user_card_note_id', optional($userCardNote)->user_card_note_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user card note</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('user_card_note_id', optional($userCardNote)->user_card_note_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_card_note_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($userCardNote)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($userCardNote)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('card_id') ? 'has-error' : '' }}">
    <label for="card_id" class="col-md-2 control-label">Card</label>
    <div class="col-md-10">
        <select class="form-control" id="card_id" name="card_id">
        	    <option value="" style="display: none;" {{ old('card_id', optional($userCardNote)->card_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select card</option>
        	@foreach ($cards as $key => $card)
			    <option value="{{ $key }}" {{ old('card_id', optional($userCardNote)->card_id) == $key ? 'selected' : '' }}>
			    	{{ $card }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('card_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
    <label for="note" class="col-md-2 control-label">Note</label>
    <div class="col-md-10">
        <textarea class="form-control" name="note" cols="50" rows="10" id="note" minlength="1" maxlength="1000">{{ old('note', optional($userCardNote)->note) }}</textarea>
        {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
    </div>
</div>

