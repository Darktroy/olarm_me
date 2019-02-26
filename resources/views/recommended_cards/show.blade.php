@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Recommended Cards' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('recommended_cards.recommended_cards.destroy', $recommendedCards->recommendedCards_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('recommended_cards.recommended_cards.index') }}" class="btn btn-primary" title="Show All Recommended Cards">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('recommended_cards.recommended_cards.create') }}" class="btn btn-success" title="Create New Recommended Cards">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('recommended_cards.recommended_cards.edit', $recommendedCards->recommendedCards_id ) }}" class="btn btn-primary" title="Edit Recommended Cards">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Recommended Cards" onclick="return confirm(&quot;Delete Recommended Cards??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Recommended Cards</dt>
            <dd>{{ $recommendedCards->recommendedCards_id }}</dd>
            <dt>Card</dt>
            <dd>{{ optional($recommendedCards->card)->card_id }}</dd>
            <dt>Recommended By User</dt>
            <dd>{{ optional($recommendedCards->recommendedByUser)->id }}</dd>
            <dt>Recommended For User</dt>
            <dd>{{ optional($recommendedCards->recommendedForUser)->id }}</dd>

        </dl>

    </div>
</div>

@endsection