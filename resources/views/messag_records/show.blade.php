@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Messag Record' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('messag_records.messag_record.destroy', $messagRecord->messag_record_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('messag_records.messag_record.index') }}" class="btn btn-primary" title="Show All Messag Record">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('messag_records.messag_record.create') }}" class="btn btn-success" title="Create New Messag Record">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('messag_records.messag_record.edit', $messagRecord->messag_record_id ) }}" class="btn btn-primary" title="Edit Messag Record">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Messag Record" onclick="return confirm(&quot;Delete Messag Record??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Messag Record</dt>
            <dd>{{ $messagRecord->messag_record_id }}</dd>
            <dt>Email</dt>
            <dd>{{ $messagRecord->email }}</dd>
            <dt>Title Of Message</dt>
            <dd>{{ $messagRecord->title_of_message }}</dd>
            <dt>Message</dt>
            <dd>{{ $messagRecord->message }}</dd>
            <dt>User</dt>
            <dd>{{ optional($messagRecord->user)->id }}</dd>

        </dl>

    </div>
</div>

@endsection