@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Qr Code User' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('qr_code_users.qr_code_user.destroy', $qrCodeUser->qr_code_user_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('qr_code_users.qr_code_user.index') }}" class="btn btn-primary" title="Show All Qr Code User">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('qr_code_users.qr_code_user.create') }}" class="btn btn-success" title="Create New Qr Code User">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('qr_code_users.qr_code_user.edit', $qrCodeUser->qr_code_user_id ) }}" class="btn btn-primary" title="Edit Qr Code User">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Qr Code User" onclick="return confirm(&quot;Click Ok to delete Qr Code User.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Qr Code User</dt>
            <dd>{{ optional($qrCodeUser->qrCodeUser)->id }}</dd>
            <dt>User</dt>
            <dd>{{ optional($qrCodeUser->user)->id }}</dd>
            <dt>Card</dt>
            <dd>{{ optional($qrCodeUser->card)->id }}</dd>
            <dt>code</dt>
            <dd>{{ $qrCodeUser->code }}</dd>
            <dt>Begain At</dt>
            <dd>{{ $qrCodeUser->begain_at }}</dd>
            <dt>Ended At</dt>
            <dd>{{ $qrCodeUser->ended_at }}</dd>

        </dl>

    </div>
</div>

@endsection