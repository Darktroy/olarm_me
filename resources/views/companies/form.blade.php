

<div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
        <label for="company_name">
        <i class="zmdi zmdi-account material-icons-name"></i>
        </label>
            <input type="text" name="company_name" id="company_name" placeholder="Company name" required="required" autofocus="autofocus"
                   value="{{ old('company_name', optional($company)->company_name) }}"   placeholder="Enter company name here...">
        {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
        
           
</div>

<div class="form-group {{ $errors->has('company_card_template') ? 'has-error' : '' }}">

    <label 
        for="company_card_template" title="card" >
                        <i class="zmdi zmdi-account material-icons-name">card Template</i>
                    </label>
              
                    <input type="file" name="company_card_template" id="company_card_template" 
                        title="Card Template"
                        placeholder="Company card template" required="required" autofocus="autofocus"
                                value="{{ old('company_card_template', optional($company)->company_card_template) }}" 
                              placeholder="Enter company Card template here...">
                     {!! $errors->first('company_card_template', '<p class="help-block">:message</p>') !!}
   
</div>

<div class="form-group ">

<!--    <label for="company_card_template" title="card" >
                        <i class="zmdi zmdi-account material-icons-name"></i>
                    </label>-->
              
                    <input type="file" name="company_card_template" id="company_card_template" 
                        title="Card Template"
                        placeholder="Company card template" required="required" autofocus="autofocus"
                                value="{{ old('company_card_template', optional($company)->company_card_template) }}" 
                              placeholder="Enter company Card template here...">
                     {!! $errors->first('company_card_template', '<p class="help-block">:message</p>') !!}
   
</div>

<div class="form-group {{ $errors->has('company_logo') ? 'has-error' : '' }}">
     <label for="company_logo">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="file" name="company_logo" id="company_logo" placeholder="Company Logo" required="required" autofocus="autofocus"
        value="{{ old('company_logo', optional($company)->company_logo) }}"   placeholder="Enter company logo here...">
        {!! $errors->first('company_logo', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_landline') ? 'has-error' : '' }}">
    <label for="company_landline">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="number" name="company_landline" id="company_landline" placeholder="Company Phone" required="required" autofocus="autofocus"
        value="{{ old('company_landline', optional($company)->company_landline) }}"   placeholder="Enter company landline here...">
        {!! $errors->first('company_landline', '<p class="help-block">:message</p>') !!}
   
</div>

<div class="form-group {{ $errors->has('company_fax') ? 'has-error' : '' }}">
    <label for="company_fax">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="number" name="company_fax" id="company_fax" placeholder="Company Fax" required="required" autofocus="autofocus"
    value="{{ old('company_fax', optional($company)->company_fax) }}"   placeholder="Enter company fax here...">
        {!! $errors->first('company_fax', '<p class="help-block">:message</p>') !!}
  
</div>

<div class="form-group {{ $errors->has('company_address') ? 'has-error' : '' }}">
    <label for="company_address">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="text" name="company_address" id="company_address" placeholder="Company address" required="required" autofocus="autofocus"
               value="{{ old('company_address', optional($company)->company_address) }}"   placeholder="Enter company address here...">
        {!! $errors->first('company_address', '<p class="help-block">:message</p>') !!}
    </div>

<div class="form-group {{ $errors->has('company_website') ? 'has-error' : '' }}">
    <label for="company_website">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="url" name="company_website" id="company_website" placeholder="Company Website Url" required="required" autofocus="autofocus"
               value="{{ old('company_website', optional($company)->company_website) }}"   placeholder="Enter company website here...">
        {!! $errors->first('company_website', '<p class="help-block">:message</p>') !!}
   
</div>

<div class="form-group {{ $errors->has('company_about') ? 'has-error' : '' }}">
    <label for="company_about">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="text" name="company_about" id="company_about" placeholder="About Company" required="required" autofocus="autofocus"
               value="{{ old('company_about', optional($company)->company_about) }}"   placeholder="Enter company about here...">
        {!! $errors->first('company_about', '<p class="help-block">:message</p>') !!}
    </div>

<div class="form-group {{ $errors->has('company_facebook') ? 'has-error' : '' }}">
    <label for="company_facebook">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="text" name="company_facebook" id="company_facebook" placeholder="Company Facebook page" required="required" autofocus="autofocus"
            value="{{ old('company_facebook', optional($company)->company_facebook) }}"   placeholder="Enter company facebook here...">
        {!! $errors->first('company_facebook', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_twitter') ? 'has-error' : '' }}">
    <label for="company_twitter">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="url" name="company_twitter" id="company_twitter" placeholder="Company Twiiter account" required="required" autofocus="autofocus"
            value="{{ old('company_twitter', optional($company)->company_twitter) }}"
              placeholder="Enter company Twitter here...">
        {!! $errors->first('company_twitter', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_instagram') ? 'has-error' : '' }}">
    <label for="company_instagram">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="url" name="company_instagram" id="company_instagram" placeholder="Company instagram page" required="required" autofocus="autofocus"
            value="{{ old('company_instagram', optional($company)->company_instagram) }}" 
              placeholder="Enter company instagram here...">
        {!! $errors->first('company_facebook', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_youtube') ? 'has-error' : '' }}">
    <label for="company_youtube">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="url" name="company_youtube" id="company_youtube" placeholder="Company Youtube channel" required="required" autofocus="autofocus"
            value="{{ old('company_youtube', optional($company)->company_youtube) }}"   placeholder="Enter company Youtube channel here...">
        {!! $errors->first('company_facebook', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_field') ? 'has-error' : '' }}">
    <label for="company_field">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="text" name="company_field" id="company_field" placeholder="Company Field" required="required" autofocus="autofocus"
            value="{{ old('company_field', optional($company)->company_field) }}"   placeholder="Enter company field here...">
        {!! $errors->first('company_field', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_industry') ? 'has-error' : '' }}">
    <label for="company_industry">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="text" name="company_industry" id="company_industry" placeholder="Company industry type" required="required" autofocus="autofocus"
            value="{{ old('company_industry', optional($company)->company_industry) }}" 
              placeholder="Enter company industry here...">
        {!! $errors->first('company_industry', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_speciality') ? 'has-error' : '' }}">
    <label for="company_speciality">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="text" name="company_speciality" id="company_speciality" placeholder="Company Speciallity" required="required" autofocus="autofocus"
            value="{{ old('company_speciality', optional($company)->company_speciality) }}" 
              placeholder="Enter company speciallity here...">
        {!! $errors->first('company_speciality', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_countary') ? 'has-error' : '' }}">
    <label for="company_countary">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="text" name="company_countary" id="company_countary" placeholder="Company countary" required="required" autofocus="autofocus"
            value="{{ old('company_countary', optional($company)->company_countary) }}" 
              placeholder="Enter company country here...">
        {!! $errors->first('company_countary', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_city') ? 'has-error' : '' }}">
    <label for="company_city">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="text" name="company_city" id="company_city" placeholder="Company city" required="required" autofocus="autofocus"
            value="{{ old('company_city', optional($company)->company_city) }}" 
              placeholder="Enter company city here...">
        {!! $errors->first('company_city', '<p class="help-block">:message</p>') !!}
    
</div>

<div class="form-group {{ $errors->has('company_district') ? 'has-error' : '' }}">
    <label for="company_district">
        <i class="zmdi zmdi-account material-icons-name"></i>
    </label>
    <input type="text" name="company_district" id="company_district" placeholder="Company district" 
           required="required" autofocus="autofocus"
            value="{{ old('company_district', optional($company)->company_district) }}" 
              placeholder="Enter company district here...">
        {!! $errors->first('company_district', '<p class="help-block">:message</p>') !!}
    
</div>