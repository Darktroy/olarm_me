@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($terms->name) ? $terms->name : 'Terms' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('terms.terms.destroy', $terms->terms_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('terms.terms.index') }}" class="btn btn-primary" title="Show All Terms">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('terms.terms.create') }}" class="btn btn-success" title="Create New Terms">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('terms.terms.edit', $terms->terms_id ) }}" class="btn btn-primary" title="Edit Terms">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Terms" onclick="return confirm(&quot;Delete Terms??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Terms</dt>
            <dd>{{ $terms->terms_id }}</dd>
            <dt>Name</dt>
            <dd>{{ $terms->name }}</dd>
            <dt>Description</dt>
            <dd>{{ $terms->description }}</dd>

        </dl>

    </div>
</div>

@endsection