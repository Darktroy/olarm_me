@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($cardsHolder->name) ? $cardsHolder->name : 'Cards Holder' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('cards_holders.cards_holder.destroy', $cardsHolder->card_holder_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('cards_holders.cards_holder.index') }}" class="btn btn-primary" title="Show All Cards Holder">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('cards_holders.cards_holder.create') }}" class="btn btn-success" title="Create New Cards Holder">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('cards_holders.cards_holder.edit', $cardsHolder->card_holder_id ) }}" class="btn btn-primary" title="Edit Cards Holder">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Cards Holder" onclick="return confirm(&quot;Delete Cards Holder??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Card Holder</dt>
            <dd>{{ optional($cardsHolder->cardHolder)->id }}</dd>
            <dt>User</dt>
            <dd>{{ optional($cardsHolder->user)->id }}</dd>
            <dt>Name</dt>
            <dd>{{ $cardsHolder->name }}</dd>

        </dl>

    </div>
</div>

@endsection