
<div class="form-group {{ $errors->has('invitation_contacts_id') ? 'has-error' : '' }}">
    <label for="invitation_contacts_id" class="col-md-2 control-label">Invitation Contacts</label>
    <div class="col-md-10">
        <select class="form-control" id="invitation_contacts_id" name="invitation_contacts_id">
        	    <option value="" style="display: none;" {{ old('invitation_contacts_id', optional($invitationContacts)->invitation_contacts_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select invitation contacts</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('invitation_contacts_id', optional($invitationContacts)->invitation_contacts_id) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('invitation_contacts_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phonecode') ? 'has-error' : '' }}">
    <label for="phonecode" class="col-md-2 control-label">Phonecode</label>
    <div class="col-md-10">
        <input class="form-control" name="phonecode" type="text" id="phonecode" value="{{ old('phonecode', optional($invitationContacts)->phonecode) }}" minlength="1" placeholder="Enter phonecode here...">
        {!! $errors->first('phonecode', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    <label for="phone" class="col-md-2 control-label">Phone</label>
    <div class="col-md-10">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($invitationContacts)->phone) }}" minlength="1" placeholder="Enter phone here...">
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('invited_user_id') ? 'has-error' : '' }}">
    <label for="invited_user_id" class="col-md-2 control-label">Invited User</label>
    <div class="col-md-10">
        <select class="form-control" id="invited_user_id" name="invited_user_id">
        	    <option value="" style="display: none;" {{ old('invited_user_id', optional($invitationContacts)->invited_user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select invited user</option>
        	@foreach ($invitedUsers as $key => $invitedUser)
			    <option value="{{ $key }}" {{ old('invited_user_id', optional($invitationContacts)->invited_user_id) == $key ? 'selected' : '' }}>
			    	{{ $invitedUser }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('invited_user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('invitation_code') ? 'has-error' : '' }}">
    <label for="invitation_code" class="col-md-2 control-label">Invitation Code</label>
    <div class="col-md-10">
        <input class="form-control" name="invitation_code" type="text" id="invitation_code" value="{{ old('invitation_code', optional($invitationContacts)->invitation_code) }}" minlength="1" placeholder="Enter invitation code here...">
        {!! $errors->first('invitation_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

