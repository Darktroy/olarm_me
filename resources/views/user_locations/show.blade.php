@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'User Location' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('user_locations.user_location.destroy', $userLocation->userLocation_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('user_locations.user_location.index') }}" class="btn btn-primary" title="Show All User Location">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('user_locations.user_location.create') }}" class="btn btn-success" title="Create New User Location">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('user_locations.user_location.edit', $userLocation->userLocation_id ) }}" class="btn btn-primary" title="Edit User Location">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete User Location" onclick="return confirm(&quot;Delete User Location??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>User Location</dt>
            <dd>{{ $userLocation->userLocation_id }}</dd>
            <dt>Lat</dt>
            <dd>{{ $userLocation->lat }}</dd>
            <dt>Long</dt>
            <dd>{{ $userLocation->long }}</dd>
            <dt>Country</dt>
            <dd>{{ $userLocation->country }}</dd>
            <dt>State</dt>
            <dd>{{ $userLocation->state }}</dd>
            <dt>City</dt>
            <dd>{{ $userLocation->city }}</dd>
            <dt>Postal Code</dt>
            <dd>{{ $userLocation->postal_code }}</dd>

        </dl>

    </div>
</div>

@endsection