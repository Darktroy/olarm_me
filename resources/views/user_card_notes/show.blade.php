@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'User Card Note' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('user_card_notes.user_card_note.destroy', $userCardNote->user_card_note_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('user_card_notes.user_card_note.index') }}" class="btn btn-primary" title="Show All User Card Note">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('user_card_notes.user_card_note.create') }}" class="btn btn-success" title="Create New User Card Note">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('user_card_notes.user_card_note.edit', $userCardNote->user_card_note_id ) }}" class="btn btn-primary" title="Edit User Card Note">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete User Card Note" onclick="return confirm(&quot;Click Ok to delete User Card Note.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>User Card Note</dt>
            <dd>{{ $userCardNote->user_card_note_id }}</dd>
            <dt>User</dt>
            <dd>{{ optional($userCardNote->user)->id }}</dd>
            <dt>Card</dt>
            <dd>{{ optional($userCardNote->card)->card_id }}</dd>
            <dt>Note</dt>
            <dd>{{ $userCardNote->note }}</dd>

        </dl>

    </div>
</div>

@endsection