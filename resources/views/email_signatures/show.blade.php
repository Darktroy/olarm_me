@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Email Signature' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('email_signatures.email_signature.destroy', $emailSignature->emailSignature_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('email_signatures.email_signature.index') }}" class="btn btn-primary" title="Show All Email Signature">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('email_signatures.email_signature.create') }}" class="btn btn-success" title="Create New Email Signature">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('email_signatures.email_signature.edit', $emailSignature->emailSignature_id ) }}" class="btn btn-primary" title="Edit Email Signature">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Email Signature" onclick="return confirm(&quot;Delete Email Signature??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Email Signature</dt>
            <dd>{{ $emailSignature->emailSignature_id }}</dd>
            <dt>User</dt>
            <dd>{{ optional($emailSignature->user)->id }}</dd>
            <dt>Image Name</dt>
            <dd>{{ $emailSignature->imageName }}</dd>

        </dl>

    </div>
</div>

@endsection