@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($interestes->name) ? $interestes->name : 'Interestes' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('interestes.interestes.destroy', $interestes->interest_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('interestes.interestes.index') }}" class="btn btn-primary" title="Show All Interestes">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('interestes.interestes.create') }}" class="btn btn-success" title="Create New Interestes">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('interestes.interestes.edit', $interestes->interest_id ) }}" class="btn btn-primary" title="Edit Interestes">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Interestes" onclick="return confirm(&quot;Delete Interestes??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Interest</dt>
            <dd>{{ $interestes->interest_id }}</dd>
            <dt>Name</dt>
            <dd>{{ $interestes->name }}</dd>

        </dl>

    </div>
</div>

@endsection