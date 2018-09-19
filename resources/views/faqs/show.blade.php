@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Faq' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('faqs.faq.destroy', $faq->faq_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('faqs.faq.index') }}" class="btn btn-primary" title="Show All Faq">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('faqs.faq.create') }}" class="btn btn-success" title="Create New Faq">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('faqs.faq.edit', $faq->faq_id ) }}" class="btn btn-primary" title="Edit Faq">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Faq" onclick="return confirm(&quot;Delete Faq??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Faq</dt>
            <dd>{{ optional($faq->faq)->id }}</dd>
            <dt>Question</dt>
            <dd>{{ $faq->question }}</dd>
            <dt>Answer</dt>
            <dd>{{ $faq->answer }}</dd>

        </dl>

    </div>
</div>

@endsection