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
                <h4 class="mt-5 mb-5">Resetsteps</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('resetsteps.resetsteps.create') }}" class="btn btn-success" title="Create New Resetsteps">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($resetstepsObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Resetsteps Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Resetsteps</th>
                            <th>Email</th>
                            <th>Confirmation Code</th>
                            <th>Confirmation Link</th>
                            <th>Temp Pass</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($resetstepsObjects as $resetsteps)
                        <tr>
                            <td>{{ $resetsteps->resetsteps_id }}</td>
                            <td>{{ $resetsteps->email }}</td>
                            <td>{{ $resetsteps->confirmation_code }}</td>
                            <td>{{ $resetsteps->confirmation_link }}</td>
                            <td>{{ $resetsteps->temp_pass }}</td>

                            <td>

                                <form method="POST" action="{!! route('resetsteps.resetsteps.destroy', $resetsteps->resetsteps_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('resetsteps.resetsteps.show', $resetsteps->resetsteps_id ) }}" class="btn btn-info" title="Show Resetsteps">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('resetsteps.resetsteps.edit', $resetsteps->resetsteps_id ) }}" class="btn btn-primary" title="Edit Resetsteps">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Resetsteps" onclick="return confirm(&quot;Delete Resetsteps?&quot;)">
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
            {!! $resetstepsObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection