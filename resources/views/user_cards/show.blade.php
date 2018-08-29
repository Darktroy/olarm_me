@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'User Cards' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('user_cards.user_cards.destroy', $userCards->user_card_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('user_cards.user_cards.index') }}" class="btn btn-primary" title="Show All User Cards">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('user_cards.user_cards.create') }}" class="btn btn-success" title="Create New User Cards">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('user_cards.user_cards.edit', $userCards->user_card_id ) }}" class="btn btn-primary" title="Edit User Cards">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete User Cards" onclick="return confirm(&quot;Delete User Cards??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>User Card</dt>
            <dd>{{ $userCards->user_card_id }}</dd>
            <dt>User</dt>
            <dd>{{ optional($userCards->user)->id }}</dd>
            <dt>Card Holder</dt>
            <dd>{{ optional($userCards->cardHolder)->id }}</dd>
            <dt>Card</dt>
            <dd>{{ optional($userCards->card)->privacy }}</dd>

        </dl>

    </div>
</div>

@endsection