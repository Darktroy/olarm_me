@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($cardToInterests->name) ? $cardToInterests->name : 'Card To Interests' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('card_to_interests.card_to_interests.destroy', $cardToInterests->card_to_interest_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('card_to_interests.card_to_interests.index') }}" class="btn btn-primary" title="Show All Card To Interests">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('card_to_interests.card_to_interests.create') }}" class="btn btn-success" title="Create New Card To Interests">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('card_to_interests.card_to_interests.edit', $cardToInterests->card_to_interest_id ) }}" class="btn btn-primary" title="Edit Card To Interests">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Card To Interests" onclick="return confirm(&quot;Delete Card To Interests??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Card To Interest</dt>
            <dd>{{ optional($cardToInterests->cardToInterest)->id }}</dd>
            <dt>Interest</dt>
            <dd>{{ optional($cardToInterests->interest)->id }}</dd>
            <dt>Name</dt>
            <dd>{{ $cardToInterests->name }}</dd>
            <dt>User</dt>
            <dd>{{ optional($cardToInterests->user)->id }}</dd>
            <dt>Private</dt>
            <dd>{{ $cardToInterests->private }}</dd>

        </dl>

    </div>
</div>

@endsection