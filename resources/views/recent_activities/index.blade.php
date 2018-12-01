@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Recent Activities</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('recent_activities.recent_activity.create') }}" class="btn btn-success" title="Create New Recent Activity">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($recentActivities) == 0)
            <div class="panel-body text-center">
                <h4>No Recent Activities Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Recent Activity</th>
                            <th>User</th>
                            <th>Action By User</th>
                            <th>Profile Image Url</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($recentActivities as $recentActivity)
                        <tr>
                            <td>{{ $recentActivity->recent_activity_id }}</td>
                            <td>{{ optional($recentActivity->user)->id }}</td>
                            <td>{{ optional($recentActivity->actionByUser)->id }}</td>
                            <td>{{ $recentActivity->profile_image_url }}</td>

                            <td>

                                <form method="POST" action="{!! route('recent_activities.recent_activity.destroy', $recentActivity->recent_activity_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('recent_activities.recent_activity.show', $recentActivity->recent_activity_id ) }}" class="btn btn-info" title="Show Recent Activity">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('recent_activities.recent_activity.edit', $recentActivity->recent_activity_id ) }}" class="btn btn-primary" title="Edit Recent Activity">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Recent Activity" onclick="return confirm(&quot;Delete Recent Activity?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $recentActivities->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection