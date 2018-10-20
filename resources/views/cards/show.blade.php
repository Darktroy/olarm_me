@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Cards' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('cards.cards.destroy', $cards->card_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('cards.cards.index') }}" class="btn btn-primary" title="Show All Cards">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('cards.cards.create') }}" class="btn btn-success" title="Create New Cards">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('cards.cards.edit', $cards->card_id ) }}" class="btn btn-primary" title="Edit Cards">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Cards" onclick="return confirm(&quot;Delete Cards??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Card</dt>
            <dd>{{ $cards->card_id }}</dd>
            <dt>User</dt>
            <dd>{{ optional($cards->user)->id }}</dd>
            <dt>Privacy</dt>
            <dd>{{ $cards->privacy }}</dd>
            <dt>Company Name</dt>
            <dd>{{ $cards->company_name }}</dd>
            <dt>Position</dt>
            <dd>{{ $cards->position }}</dd>
            <dt>Cell Phone Number</dt>
            <dd>{{ $cards->cell_phone_number }}</dd>
            <dt>Landline</dt>
            <dd>{{ $cards->landline }}</dd>
            <dt>Fax</dt>
            <dd>{{ $cards->fax }}</dd>
            <dt>Website Url</dt>
            <dd>{{ $cards->website_url }}</dd>
            <dt>About Me</dt>
            <dd>{{ $cards->about_me }}</dd>

        </dl>

    </div>
</div>

@endsection