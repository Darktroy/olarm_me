
<div class="form-group {{ $errors->has('qr_code_user_id') ? 'has-error' : '' }}">
    <label for="qr_code_user_id" class="col-md-2 control-label">Qr Code User</label>
    <div class="col-md-10">
        <select class="form-control" id="qr_code_user_id" name="qr_code_user_id" required="true">
        	    <option value="" style="display: none;" {{ old('qr_code_user_id', optional($qrCodeUser)->qr_code_user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select qr code user</option>
        	@foreach ($qrCodeUsers as $key => $qrCodeUser)
			    <option value="{{ $key }}" {{ old('qr_code_user_id', optional($qrCodeUser)->qr_code_user_id) == $key ? 'selected' : '' }}>
			    	{{ $qrCodeUser }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('qr_code_user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($qrCodeUser)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($qrCodeUser)->user_id) == $key ? 'selected' : '' }}>
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
        	    <option value="" style="display: none;" {{ old('card_id', optional($qrCodeUser)->card_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select card</option>
        	@foreach ($cards as $key => $card)
			    <option value="{{ $key }}" {{ old('card_id', optional($qrCodeUser)->card_id) == $key ? 'selected' : '' }}>
			    	{{ $card }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('card_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
    <label for="code" class="col-md-2 control-label">code</label>
    <div class="col-md-10">
        <select class="form-control" id="code" name="code">
        	    <option value="" style="display: none;" {{ old('code', optional($qrCodeUser)->code ?: '') == '' ? 'selected' : '' }} disabled selected>Select card</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('code', optional($qrCodeUser)->code) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('begain_at') ? 'has-error' : '' }}">
    <label for="begain_at" class="col-md-2 control-label">Begain At</label>
    <div class="col-md-10">
        <input class="form-control" name="begain_at" type="text" id="begain_at" value="{{ old('begain_at', optional($qrCodeUser)->begain_at) }}" placeholder="Enter begain at here...">
        {!! $errors->first('begain_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ended_at') ? 'has-error' : '' }}">
    <label for="ended_at" class="col-md-2 control-label">Ended At</label>
    <div class="col-md-10">
        <input class="form-control" name="ended_at" type="text" id="ended_at" value="{{ old('ended_at', optional($qrCodeUser)->ended_at) }}" placeholder="Enter ended at here...">
        {!! $errors->first('ended_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>

