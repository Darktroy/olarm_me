
<div class="form-group {{ $errors->has('card_holder_id') ? 'has-error' : '' }}">
    <label for="card_holder_id" class="col-md-2 control-label">Card Holder</label>
    <div class="col-md-10">
        <select class="form-control" id="card_holder_id" name="card_holder_id" required="true">
        	    <option value="" style="display: none;" {{ old('card_holder_id', optional($cardsHolder)->card_holder_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select card holder</option>
        	@foreach ($cardHolders as $key => $cardHolder)
			    <option value="{{ $key }}" {{ old('card_holder_id', optional($cardsHolder)->card_holder_id) == $key ? 'selected' : '' }}>
			    	{{ $cardHolder }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('card_holder_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($cardsHolder)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($cardsHolder)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($cardsHolder)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

