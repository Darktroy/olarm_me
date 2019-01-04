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
                <h4 class="mt-5 mb-5">Branchs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('branchs.branchs.create') }}" class="btn btn-success" title="Create New Branchs">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($branchsObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Branchs Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Branch</th>
                            <th>Company</th>
                            <th>Name</th>
                            <th>Address</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($branchsObjects as $branchs)
                        <tr>
                            <td>{{ $branchs->branch_id }}</td>
                            <td>{{ optional($branchs->company)->id }}</td>
                            <td>{{ $branchs->name }}</td>
                            <td>{{ $branchs->address }}</td>

                            <td>

                                <form method="POST" action="{!! route('branchs.branchs.destroy', $branchs->branch_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('branchs.branchs.show', $branchs->branch_id ) }}" class="btn btn-info" title="Show Branchs">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('branchs.branchs.edit', $branchs->branch_id ) }}" class="btn btn-primary" title="Edit Branchs">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Branchs" onclick="return confirm(&quot;Delete Branchs?&quot;)">
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
            {!! $branchsObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection