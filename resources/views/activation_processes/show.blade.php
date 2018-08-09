@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Activation Process' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('activation_processes.activation_process.destroy', $activationProcess->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('activation_processes.activation_process.index') }}" class="btn btn-primary" title="Show All Activation Process">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('activation_processes.activation_process.create') }}" class="btn btn-success" title="Create New Activation Process">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('activation_processes.activation_process.edit', $activationProcess->id ) }}" class="btn btn-primary" title="Edit Activation Process">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Activation Process" onclick="return confirm(&quot;Delete Activation Process??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Activationcode</dt>
            <dd>{{ $activationProcess->activationcode }}</dd>
            <dt>User</dt>
            <dd>{{ optional($activationProcess->user)->id }}</dd>

        </dl>

    </div>
</div>

@endsection