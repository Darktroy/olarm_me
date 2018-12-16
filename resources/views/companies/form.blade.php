

<div class="wrap-contact100">
				<span class="contact100-form-title">
					Admin details
				</span>

				<div class="wrap-input100 validate-input" data-validate="First Name is required">
					<span class="label-input100">First Name</span>
					<input class="input100" type="text" name="admin_first_name" placeholder="First Name...">
					<span class="focus-input100"></span>
				</div>
                                <div class="wrap-input100 validate-input" data-validate="Last Name is required">
					<span class="label-input100">Last Name</span>
					<input class="input100" type="text" name="admin_last_name" placeholder="Last Name...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="admin_email" placeholder="Email addess...">
					<span class="focus-input100"></span>
				</div>
    
				<div class="wrap-input100 validate-input" data-validate = "password is required">
					<span class="label-input100">Password</span>
                                        <input class="input100" type="password" name="password" placeholder="Email addess...">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Confirm password is required">
					<span class="label-input100">Confirm password</span>
                                        <input class="input100" type="password" name="c_password" placeholder="Confirm password...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Mobile Number</span>
					<input class="input100" type="text" name="admin_phone" placeholder="Mobile Number...">
					<span class="focus-input100"></span>
				</div>

<!--				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Questions/Comments..."></textarea>
					<span class="focus-input100"></span>
				</div>-->
		</div>
<div class="wrap-contact2" >
<hr style="border-left:1px solid #dbdbdb; height: 100%; display: inline-block;">   
</div>
<div class="wrap-contact100">

				<span class="contact100-form-title">
					Company details
				</span>
<div class="wrap-input100 validate-input form-group {{ $errors->has('company_name') ? 'has-error' : '' }}" 
     data-validate="Company Name is required">
        <span class="label-input100">Company Name</span>
        <input class="input100" type="text" name="company_name" placeholder="Company Name..."  
               value="{{ old('company_name', optional($company)->company_name) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_registry_paper') ? 'has-error' : '' }}" 
     data-validate=" company registry is required">
        <span class="label-input100"> Commercial registry </span>
        <input class="input102" type="file" name="company_registry_paper" placeholder="company registry ..."  
               value="{{ old('company_registry_paper', optional($company)->company_registry_paper) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_registry_paper', '<p class="help-block">:message</p>') !!}
</div>
    
<div class="wrap-input100 validate-input form-group {{ $errors->has('company_tax_card') ? 'has-error' : '' }}" 
     data-validate=" company tax card is required">
        <span class="label-input100"> Company tax card </span>
        <input class="input102" type="file" name="company_tax_card" placeholder="company tax card ..."  
               value="{{ old('company_tax_card', optional($company)->company_tax_card) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_tax_card', '<p class="help-block">:message</p>') !!}
</div>

<!--
<div class="wrap-input100 validate-input form-group {{ $errors->has('company_logo') ? 'has-error' : '' }}" 
     data-validate="company logo is required">
        <span class="label-input100">  </span>
        <input class="input100" type="file" name="company_logo" placeholder="company logo ..."  
               value="{{ old('company_logo', optional($company)->company_logo) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_logo', '<p class="help-block">:message</p>') !!}
</div>-->

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_landline') ? 'has-error' : '' }}" 
     data-validate="company landline  is required">
        <span class="label-input100"> Company landline  </span>
        <input class="input100" type="text" name="company_landline" placeholder="company landline ..."  
               value="{{ old('company_landline', optional($company)->company_landline) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_landline', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_fax') ? 'has-error' : '' }}" 
     data-validate="company fax is required">
        <span class="label-input100"> Company fax </span>
        <input class="input100" type="text" name="company_fax" placeholder="company fax ..."  
               value="{{ old('company_fax', optional($company)->company_fax) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_fax', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_address') ? 'has-error' : '' }}" 
     data-validate="company address is required">
        <span class="label-input100"> Company address </span>
        <input class="input100" type="text" name="company_address" placeholder="company address ..."  
               value="{{ old('company_address', optional($company)->company_address) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_address', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_website') ? 'has-error' : '' }}" 
     data-validate="company website is required">
        <span class="label-input100"> Company website </span>
        <input class="input100" type="text" name="company_website" placeholder="company website ..."  
               value="{{ old('company_website', optional($company)->company_website) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_website', '<p class="help-block">:message</p>') !!}
</div>
<!--
<div class="wrap-input100 validate-input form-group {{ $errors->has('company_about') ? 'has-error' : '' }}" 
     data-validate="company about is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_about" placeholder="company about ..."  
               value="{{ old('company_about', optional($company)->company_about) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_about', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_facebook') ? 'has-error' : '' }}" 
     data-validate="company facebook is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_facebook" placeholder="company facebook ..."  
               value="{{ old('company_facebook', optional($company)->company_facebook) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_facebook', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_twitter') ? 'has-error' : '' }}" 
     data-validate="company twitter is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_twitter" placeholder="company twitter ..."  
               value="{{ old('company_twitter', optional($company)->company_twitter) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_twitter', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_instagram') ? 'has-error' : '' }}" 
     data-validate="company instagram is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_instagram" placeholder="company instagram ..."  
               value="{{ old('company_instagram', optional($company)->company_instagram) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_instagram', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_youtube') ? 'has-error' : '' }}" 
     data-validate="company youtube is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_youtube" placeholder="company youtube ..."  
               value="{{ old('company_youtube', optional($company)->company_youtube) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_youtube', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_field') ? 'has-error' : '' }}" 
     data-validate="company field is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_field" placeholder="company field ..."  
               value="{{ old('company_field', optional($company)->company_field) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_field', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_industry') ? 'has-error' : '' }}" 
     data-validate="company industry is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_industry" placeholder="company industry ..."  
               value="{{ old('company_industry', optional($company)->company_industry) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_industry', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_speciality') ? 'has-error' : '' }}" 
     data-validate="company speciality is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_speciality" placeholder="company speciality ..."  
               value="{{ old('company_speciality', optional($company)->company_speciality) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_speciality', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_countary') ? 'has-error' : '' }}" 
     data-validate="company countary is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_countary" placeholder="company countary ..."  
               value="{{ old('company_countary', optional($company)->company_countary) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_countary', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_city') ? 'has-error' : '' }}" 
     data-validate="company city is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_city" placeholder="company city ..."  
               value="{{ old('company_city', optional($company)->company_city) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_city', '<p class="help-block">:message</p>') !!}
</div>

<div class="wrap-input100 validate-input form-group {{ $errors->has('company_district') ? 'has-error' : '' }}" 
     data-validate="company district is required">
        <span class="label-input100">  </span>
        <input class="input100" type="text" name="company_district" placeholder="company district..."  
               value="{{ old('company_district', optional($company)->company_district) }}" >
        <span class="focus-input100"></span>
        {!! $errors->first('company_district', '<p class="help-block">:message</p>') !!}
</div>-->

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							Send
						</button>
					</div>
				</div>
</div>