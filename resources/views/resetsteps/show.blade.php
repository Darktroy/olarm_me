@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Resetsteps' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('resetsteps.resetsteps.destroy', $resetsteps->resetsteps_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('resetsteps.resetsteps.index') }}" class="btn btn-primary" title="Show All Resetsteps">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('resetsteps.resetsteps.create') }}" class="btn btn-success" title="Create New Resetsteps">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('resetsteps.resetsteps.edit', $resetsteps->resetsteps_id ) }}" class="btn btn-primary" title="Edit Resetsteps">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Resetsteps" onclick="return confirm(&quot;Delete Resetsteps??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Resetsteps</dt>
            <dd>{{ $resetsteps->resetsteps_id }}</dd>
            <dt>Email</dt>
            <dd>{{ $resetsteps->email }}</dd>
            <dt>Confirmation Code</dt>
            <dd>{{ $resetsteps->confirmation_code }}</dd>
            <dt>Confirmation Link</dt>
            <dd>{{ $resetsteps->confirmation_link }}</dd>
            <dt>Temp Pass</dt>
            <dd>{{ $resetsteps->temp_pass }}</dd>

        </dl>

    </div>
</div>

@endsection