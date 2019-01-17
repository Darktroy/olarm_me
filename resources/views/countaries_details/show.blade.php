@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Countaries Details' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('countaries_details.countaries_details.destroy', $countariesDetails->countariesDetails_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('countaries_details.countaries_details.index') }}" class="btn btn-primary" title="Show All Countaries Details">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('countaries_details.countaries_details.create') }}" class="btn btn-success" title="Create New Countaries Details">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('countaries_details.countaries_details.edit', $countariesDetails->countariesDetails_id ) }}" class="btn btn-primary" title="Edit Countaries Details">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Countaries Details" onclick="return confirm(&quot;Delete Countaries Details??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Countaries Details</dt>
            <dd>{{ $countariesDetails->countariesDetails_id }}</dd>
            <dt>Countary Name</dt>
            <dd>{{ $countariesDetails->countaryName }}</dd>
            <dt>City Name</dt>
            <dd>{{ $countariesDetails->cityName }}</dd>
            <dt>District</dt>
            <dd>{{ $countariesDetails->district }}</dd>

        </dl>

    </div>
</div>

@endsection