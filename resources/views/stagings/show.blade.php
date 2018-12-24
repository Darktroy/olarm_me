@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Staging' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('stagings.staging.destroy', $staging->staging_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('stagings.staging.index') }}" class="btn btn-primary" title="Show All Staging">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('stagings.staging.create') }}" class="btn btn-success" title="Create New Staging">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('stagings.staging.edit', $staging->staging_id ) }}" class="btn btn-primary" title="Edit Staging">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Staging" onclick="return confirm(&quot;Delete Staging??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Staging</dt>
            <dd>{{ $staging->staging_id }}</dd>
            <dt>User</dt>
            <dd>{{ optional($staging->user)->id }}</dd>
            <dt>Registration</dt>
            <dd>{{ $staging->registration }}</dd>
            <dt>Active Account</dt>
            <dd>{{ $staging->active_account }}</dd>
            <dt>Creation Own Profile</dt>
            <dd>{{ $staging->creation_own_profile }}</dd>
            <dt>Creation Own Card</dt>
            <dd>{{ $staging->creation_own_card }}</dd>

        </dl>

    </div>
</div>

@endsection