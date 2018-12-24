@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Recent Activity' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('recent_activities.recent_activity.destroy', $recentActivity->recent_activity_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('recent_activities.recent_activity.index') }}" class="btn btn-primary" title="Show All Recent Activity">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('recent_activities.recent_activity.create') }}" class="btn btn-success" title="Create New Recent Activity">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('recent_activities.recent_activity.edit', $recentActivity->recent_activity_id ) }}" class="btn btn-primary" title="Edit Recent Activity">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Recent Activity" onclick="return confirm(&quot;Delete Recent Activity??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Recent Activity</dt>
            <dd>{{ $recentActivity->recent_activity_id }}</dd>
            <dt>User</dt>
            <dd>{{ optional($recentActivity->user)->id }}</dd>
            <dt>Action By User</dt>
            <dd>{{ optional($recentActivity->actionByUser)->id }}</dd>
            <dt>Description</dt>
            <dd>{{ $recentActivity->description }}</dd>
            <dt>Profile Image Url</dt>
            <dd>{{ $recentActivity->profile_image_url }}</dd>

        </dl>

    </div>
</div>

@endsection