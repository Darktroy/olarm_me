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
                <h4 class="mt-5 mb-5">User Locations</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('user_locations.user_location.create') }}" class="btn btn-success" title="Create New User Location">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($userLocations) == 0)
            <div class="panel-body text-center">
                <h4>No User Locations Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>User Location</th>
                            <th>Lat</th>
                            <th>Long</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Postal Code</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($userLocations as $userLocation)
                        <tr>
                            <td>{{ $userLocation->userLocation_id }}</td>
                            <td>{{ $userLocation->lat }}</td>
                            <td>{{ $userLocation->long }}</td>
                            <td>{{ $userLocation->country }}</td>
                            <td>{{ $userLocation->state }}</td>
                            <td>{{ $userLocation->city }}</td>
                            <td>{{ $userLocation->postal_code }}</td>

                            <td>

                                <form method="POST" action="{!! route('user_locations.user_location.destroy', $userLocation->userLocation_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('user_locations.user_location.show', $userLocation->userLocation_id ) }}" class="btn btn-info" title="Show User Location">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('user_locations.user_location.edit', $userLocation->userLocation_id ) }}" class="btn btn-primary" title="Edit User Location">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete User Location" onclick="return confirm(&quot;Delete User Location?&quot;)">
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
            {!! $userLocations->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection