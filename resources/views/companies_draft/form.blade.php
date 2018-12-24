

<div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
    <label for="company_name" class="col-md-4 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="company_name" type="text" id="company_name" value="{{ old('company_name', optional($company)->company_name) }}" minlength="1" placeholder="Enter company name here...">
        {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_card_template') ? 'has-error' : '' }}">
    <label for="company_card_template" class="col-md-4 control-label">Card template</label>
    <div class="col-md-10">
        <input class="form-control" name="company_card_template" type="file" id="company_card_template" 
               value="{{ old('company_card_template', optional($company)->company_card_template) }}" 
               minlength="1" placeholder="Enter company Card template here...">
        {!! $errors->first('company_card_template', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_logo') ? 'has-error' : '' }}">
    <label for="company_logo" class="col-md-4 control-label">Logo</label>
    <div class="col-md-10">
        <input class="form-control" name="company_logo" type="file" id="company_logo" value="{{ old('company_logo', optional($company)->company_logo) }}" minlength="1" placeholder="Enter company logo here...">
        {!! $errors->first('company_logo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_landline') ? 'has-error' : '' }}">
    <label for="company_landline" class="col-md-4 control-label">Landline</label>
    <div class="col-md-10">
        <input class="form-control" name="company_landline" type="text" id="company_landline" value="{{ old('company_landline', optional($company)->company_landline) }}" minlength="1" placeholder="Enter company landline here...">
        {!! $errors->first('company_landline', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_fax') ? 'has-error' : '' }}">
    <label for="company_fax" class="col-md-4 control-label">Fax</label>
    <div class="col-md-10">
        <input class="form-control" name="company_fax" type="text" id="company_fax" value="{{ old('company_fax', optional($company)->company_fax) }}" minlength="1" placeholder="Enter company fax here...">
        {!! $errors->first('company_fax', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_address') ? 'has-error' : '' }}">
    <label for="company_address" class="col-md-4 control-label">Address</label>
    <div class="col-md-10">
        <input class="form-control" name="company_address" type="text" id="company_address" value="{{ old('company_address', optional($company)->company_address) }}" minlength="1" placeholder="Enter company address here...">
        {!! $errors->first('company_address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_website') ? 'has-error' : '' }}">
    <label for="company_website" class="col-md-4 control-label">Website</label>
    <div class="col-md-10">
        <input class="form-control" name="company_website" type="text" id="company_website" value="{{ old('company_website', optional($company)->company_website) }}" minlength="1" placeholder="Enter company website here...">
        {!! $errors->first('company_website', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_about') ? 'has-error' : '' }}">
    <label for="company_about" class="col-md-4 control-label">About</label>
    <div class="col-md-10">
        <input class="form-control" name="company_about" type="text" id="company_about" value="{{ old('company_about', optional($company)->company_about) }}" minlength="1" placeholder="Enter company about here...">
        {!! $errors->first('company_about', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_facebook') ? 'has-error' : '' }}">
    <label for="company_facebook" class="col-md-4 control-label">Facebook</label>
    <div class="col-md-10">
        <input class="form-control" name="company_facebook" type="text" id="company_facebook" value="{{ old('company_facebook', optional($company)->company_facebook) }}" minlength="1" placeholder="Enter company facebook here...">
        {!! $errors->first('company_facebook', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_twitter') ? 'has-error' : '' }}">
    <label for="company_twitter" class="col-md-4 control-label">Twitter</label>
    <div class="col-md-10">
        <input class="form-control" name="company_twitter" type="text" id="company_twitter" value="{{ old('company_twitter', optional($company)->company_twitter) }}" minlength="1" placeholder="Enter company twitter here...">
        {!! $errors->first('company_twitter', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_instagram') ? 'has-error' : '' }}">
    <label for="company_instagram" class="col-md-4 control-label">Instagram</label>
    <div class="col-md-10">
        <input class="form-control" name="company_instagram" type="text" id="company_instagram" value="{{ old('company_instagram', optional($company)->company_instagram) }}" minlength="1" placeholder="Enter company instagram here...">
        {!! $errors->first('company_instagram', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_youtube') ? 'has-error' : '' }}">
    <label for="company_youtube" class="col-md-4 control-label">Youtube</label>
    <div class="col-md-10">
        <input class="form-control" name="company_youtube" type="text" id="company_youtube" value="{{ old('company_youtube', optional($company)->company_youtube) }}" minlength="1" placeholder="Enter company youtube here...">
        {!! $errors->first('company_youtube', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_field') ? 'has-error' : '' }}">
    <label for="company_field" class="col-md-4 control-label">Field</label>
    <div class="col-md-10">
        <input class="form-control" name="company_field" type="text" id="company_field" value="{{ old('company_field', optional($company)->company_field) }}" minlength="1" placeholder="Enter company field here...">
        {!! $errors->first('company_field', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_industry') ? 'has-error' : '' }}">
    <label for="company_industry" class="col-md-4 control-label">Industry</label>
    <div class="col-md-10">
        <input class="form-control" name="company_industry" type="text" id="company_industry" value="{{ old('company_industry', optional($company)->company_industry) }}" minlength="1" placeholder="Enter company industry here...">
        {!! $errors->first('company_industry', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_speciality') ? 'has-error' : '' }}">
    <label for="company_speciality" class="col-md-4 control-label">Speciality</label>
    <div class="col-md-10">
        <input class="form-control" name="company_speciality" type="text" id="company_speciality" value="{{ old('company_speciality', optional($company)->company_speciality) }}" minlength="1" placeholder="Enter company speciality here...">
        {!! $errors->first('company_speciality', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_countary') ? 'has-error' : '' }}">
    <label for="company_countary" class="col-md-4 control-label">Countary</label>
    <div class="col-md-10">
        <input class="form-control" name="company_countary" type="text" id="company_countary" value="{{ old('company_countary', optional($company)->company_countary) }}" placeholder="Enter company countary here...">
        {!! $errors->first('company_countary', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_city') ? 'has-error' : '' }}">
    <label for="company_city" class="col-md-4 control-label">City</label>
    <div class="col-md-10">
        <input class="form-control" name="company_city" type="text" id="company_city" value="{{ old('company_city', optional($company)->company_city) }}" minlength="1" placeholder="Enter company city here...">
        {!! $errors->first('company_city', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('company_district') ? 'has-error' : '' }}">
    <label for="company_district" class="col-md-4 control-label">District</label>
    <div class="col-md-10">
        <input class="form-control" name="company_district" type="text" id="company_district" value="{{ old('company_district', optional($company)->company_district) }}" minlength="1" placeholder="Enter company district here...">
        {!! $errors->first('company_district', '<p class="help-block">:message</p>') !!}
    </div>
</div>

