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
                <h4 class="mt-5 mb-5">Activation Processes</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('activation_processes.activation_process.create') }}" class="btn btn-success" title="Create New Activation Process">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($activationProcesses) == 0)
            <div class="panel-body text-center">
                <h4>No Activation Processes Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Activationcode</th>
                            <th>User</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($activationProcesses as $activationProcess)
                        <tr>
                            <td>{{ $activationProcess->activationcode }}</td>
                            <td>{{ optional($activationProcess->user)->id }}</td>

                            <td>

                                <form method="POST" action="{!! route('activation_processes.activation_process.destroy', $activationProcess->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('activation_processes.activation_process.show', $activationProcess->id ) }}" class="btn btn-info" title="Show Activation Process">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('activation_processes.activation_process.edit', $activationProcess->id ) }}" class="btn btn-primary" title="Edit Activation Process">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Activation Process" onclick="return confirm(&quot;Delete Activation Process?&quot;)">
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
            {!! $activationProcesses->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection