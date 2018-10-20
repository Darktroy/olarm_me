@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Requests' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('requests.requests.destroy', $requests->request_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('requests.requests.index') }}" class="btn btn-primary" title="Show All Requests">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('requests.requests.create') }}" class="btn btn-success" title="Create New Requests">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('requests.requests.edit', $requests->request_id ) }}" class="btn btn-primary" title="Edit Requests">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Requests" onclick="return confirm(&quot;Delete Requests??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Request</dt>
            <dd>{{ $requests->request_id }}</dd>
            <dt>From</dt>
            <dd>{{ optional($requests->from)->id }}</dd>
            <dt>To</dt>
            <dd>{{ optional($requests->to)->id }}</dd>

        </dl>

    </div>
</div>

@endsection