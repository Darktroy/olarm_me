
<div class="form-group {{ $errors->has('faq_id') ? 'has-error' : '' }}">
    <label for="faq_id" class="col-md-2 control-label">Faq</label>
    <div class="col-md-10">
        <select class="form-control" id="faq_id" name="faq_id">
        	    <option value="" style="display: none;" {{ old('faq_id', optional($faq)->faq_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select faq</option>
        	@foreach ($faqs as $key => $faq)
			    <option value="{{ $key }}" {{ old('faq_id', optional($faq)->faq_id) == $key ? 'selected' : '' }}>
			    	{{ $faq }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('faq_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('question') ? 'has-error' : '' }}">
    <label for="question" class="col-md-2 control-label">Question</label>
    <div class="col-md-10">
        <input class="form-control" name="question" type="text" id="question" value="{{ old('question', optional($faq)->question) }}" minlength="1" placeholder="Enter question here...">
        {!! $errors->first('question', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('answer') ? 'has-error' : '' }}">
    <label for="answer" class="col-md-2 control-label">Answer</label>
    <div class="col-md-10">
        <input class="form-control" name="answer" type="text" id="answer" value="{{ old('answer', optional($faq)->answer) }}" minlength="1" placeholder="Enter answer here...">
        {!! $errors->first('answer', '<p class="help-block">:message</p>') !!}
    </div>
</div>

