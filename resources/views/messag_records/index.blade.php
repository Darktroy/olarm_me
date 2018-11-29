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
                <h4 class="mt-5 mb-5">Messag Records</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('messag_records.messag_record.create') }}" class="btn btn-success" title="Create New Messag Record">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($messagRecords) == 0)
            <div class="panel-body text-center">
                <h4>No Messag Records Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Messag Record</th>
                            <th>Email</th>
                            <th>Title Of Message</th>
                            <th>User</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($messagRecords as $messagRecord)
                        <tr>
                            <td>{{ $messagRecord->messag_record_id }}</td>
                            <td>{{ $messagRecord->email }}</td>
                            <td>{{ $messagRecord->title_of_message }}</td>
                            <td>{{ optional($messagRecord->user)->id }}</td>

                            <td>

                                <form method="POST" action="{!! route('messag_records.messag_record.destroy', $messagRecord->messag_record_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('messag_records.messag_record.show', $messagRecord->messag_record_id ) }}" class="btn btn-info" title="Show Messag Record">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('messag_records.messag_record.edit', $messagRecord->messag_record_id ) }}" class="btn btn-primary" title="Edit Messag Record">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Messag Record" onclick="return confirm(&quot;Delete Messag Record?&quot;)">
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
            {!! $messagRecords->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection